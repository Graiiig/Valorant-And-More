<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use App\Entity\AnnouncesPlayers;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class AnnouncesController extends AbstractController
{

    /**
     * @Route("/{_locale}/announces", name="announces", requirements={"_locale"= "en|fr|es"})
     */
    public function index(Request $request)
    {

        $announces = new AnnouncesPlayers();

        $form = $this->createFormBuilder($announces)
            ->add("title", TextType::class)
            ->add("username", HiddenType::class)
            ->add("agentplayed", HiddenType::class)
            ->add("description", TextareaType::class)
            ->add("level", TextType::class)

            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($announces);
            $entityManager->flush();
        }

        return $this->render('announces/index.html.twig', [
            'controller_name' => 'AnnouncesController',
            'formAnnounces' => $form->createView()
        ]);
    }
}
