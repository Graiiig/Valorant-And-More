<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class NotificationsService
{
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorageInterface)
    {
        $this->entityManager = $entityManager;
        $this->user = $tokenStorageInterface->getToken() ? $tokenStorageInterface->getToken()->getUser() : null;
    }



    public function getNotifications() :array
    {
        //Si le client est authentifié, on récupère son nombre de notifications
        if (isset($user)) {
            dump($user);
            $username = $user->getUsername();
            $notifications = $this->entityManager
                ->getRepository(Messages::class)
                ->findBy(
                    [
                        'receiver' => $username,
                        'notified' => "1"
                    ]
                );
            return $notifications;
        }
        else {
            return ["null"];
        }
    }
}
