<?php

// src/Service/DiscoverController.php
namespace App\Service;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\WebLink\Link;
use Symfony\Component\Routing\Annotation\Route;

class DiscoverService extends AbstractController
{

    /** 
     * @var string
    */
    private $secret;

    public function __construct(string $secret)
    {
        $this->secret = $secret;
    }

    

    public function __invoke(Request $request, string $secret): Response
    {
        dump("invoke");
        $hubUrl = $this->getParameter('mercure.default_hub');
        $this->addLink($request, new Link('mercure', $hubUrl));

        $username = $this->getUser()->getUsername(); // Retrieve the username of the current user
        $token = (new Builder())
            // set other appropriate JWT claims, such as an expiration date
            ->withClaim('mercure', ['subscribe' => ["http://example.com/user/$username"]]) // could also include the security roles, or anything else
            ->getToken(new Sha256(), new Key($this->getParameter($this->secret))); // don't forget to set this parameter! Test value: aVerySecretKey

        $response = $this->json(['@id' => '/demo/books/1', 'availability' => 'https://schema.org/InStock']);
        $response->headers->set(
            'set-cookie',
            sprintf('mercureAuthorization=%s; path=/.well-known/mercure; secure; httponly; SameSite=strict', $token)
        );

        return $response;
    }
}