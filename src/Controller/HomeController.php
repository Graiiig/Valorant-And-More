<?php

// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;


use App\Entity\User;

class HomeController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('home', ['_locale'=>'en']);
    }
    
    /**
     * @Route("/{_locale}/home/", name="home", requirements={"_locale"= "en|fr|es"})
     */
    public function home(PublisherInterface $publisher)
    {
        return $this->render('Home/home.html.twig');
    }

 
  

    
}

