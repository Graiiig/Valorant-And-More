<?php
// src/Controller/QuizzController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Contracts\Translation\TranslatorInterface;


class QuizzController extends AbstractController
{

   
    /**
     * @Route("/{_locale}/quizz/", name="quizz", requirements={"_locale"= "en|fr|es"})
     */
    public function home()
    {
        
        $title = 'Quizz - Valorant & More ';
        $quizz1 = 'Valorant and More';
        return $this->render('Quizz/quizz.html.twig',[
            'title' => $title,
            'quizz1' => $quizz1

        ]);
    }

    
}