<?php

// src/Controller/FindController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AnnouncesPlayers;
use App\Entity\User;
use App\Entity\Teams;
use App\Entity\Messages;
use App\Service\NotificationsService;
use Symfony\Component\Notifier\Notification\Notification;

class FindController extends AbstractController
{


    /**
     * @Route("/{_locale}/findteam", name="findteam", requirements={"_locale"= "en|fr|es"})
     */
    public function Findteam(NotificationsService $notificationsService)
    {

        //On récupère toutes les teams et on inverse 
        //Pour avoir les plus récentes en premier
        $Allteams = $this->getDoctrine()
            ->getRepository(Teams::class)
            ->findAll();

        $Allteams = array_reverse($Allteams);

        //Si le client n'est pas authentifié
        //On le redirige vers login
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        } else {
            return $this->render('find/findteam.html.twig', [
                'Allteams' => $Allteams,
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }
    }

    /**
     * @Route("/{_locale}/findplayers", name="findplayers", requirements={"_locale"= "en|fr|es"})
     */
    public function Findplayers(NotificationsService $notificationsService)
    {

        //On commence par récupérer tous les joueurs qui ont une annonce en ligne
        //Puis on inverse pour avoir les plus récents
        $Allplayers = $this->getDoctrine()
            ->getRepository(User::class)
            ->findBy(['announce_status' => '1']);

        $Allplayers = array_reverse($Allplayers);

        $count = [];

        //Et si le client n'est pas authentifié
        //On le redirige vers login
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        } else {
            return $this->render('find/findplayers.html.twig', [
                'Allplayers' => $Allplayers,
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }
    }

    /**
     * @Route("/{_locale}/findplayers/{user}", name="findplayersuser", requirements={"_locale"= "en|fr|es"})
     */
    public function Findplayersuser($user, NotificationsService $notificationsService)
    {
        $Allplayers = $this->getDoctrine()
            ->getRepository(AnnouncesPlayers::class)
            ->findBy(['username' => $user]);

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        } else {
            return $this->render('find/findplayersuser.html.twig', [
                'Allplayers' => $Allplayers,
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }
    }
}
