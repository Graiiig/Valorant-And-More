<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\AnnouncesPlayers;
use App\Entity\Teams;
use App\Service\FileUploader;
use App\Service\NotificationsService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\HttpFoundation\File\UploadedFile;




class ProfilController extends AbstractController
{

    /**
     * @Assert\DateTime
     * @var string A "Y-m-d H:i:s" formatted value
     */
    protected $createdAt;
    protected $request;

    public function __construct(RequestStack $requestStack, NotificationsService $notificationsService)
    {
        $this->request = $requestStack->getCurrentRequest();
        $this->notifications = $notificationsService->getNotifications();
    }

    /**
     * @Route("/{_locale}/profil/deleteteam/{teamtodelete}", name="deleteteam", requirements={"_locale"= "en|fr|es"})
     */
    public function deleteTeam(Teams $teamtodelete, NotificationsService  $notificationsService)
    {

        //On récupère l'utilisateur authentifié
        $user = $this->getUser();

        try {
            //ON verifie si la team existe
            if (isset($teamtodelete[0])) {
                //Si oui, et que l'utilisateur en est le créateur,
                //On la supprime
                if ($user->getUsername() == $teamtodelete[0]->getCreator()) {
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->remove($teamtodelete[0]);
                    $entityManager->flush();
                }
                //Sinon on lui indique que ce n'est pas son équipe
                //Et qu'il ne peut pas la supprimer
                else {
                    return $this->render('profil/profil_deleteteam.html.twig', [
                        'teamtodelete' => $teamtodelete,
                        'selectedpage' => 'deleteteam',
                        'teamstatus' => 'notyourteam',
                        'notifications' => $notificationsService->getNotifications(),
                    ]);
                }
            }
            // Si la team n'existe pas, on avertit l'utilisateur
            else {
                return $this->render('profil/profil_deleteteam.html.twig', [
                    'teamtodelete' => $teamtodelete,
                    'selectedpage' => 'deleteteam',
                    'teamstatus' => 'notyourteam',
                    'notifications' => $notificationsService->getNotifications(),
                ]);
            }
        } catch (UniqueConstraintViolationException $e) {
            return $this->render('profil/profil_deleteteam.html.twig', [
                'teamtodelete' => $teamtodelete,
                'selectedpage' => 'deleteteam',
                'teamstatus' => 'teamnotdefined',
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }


        //Vue de la page de suppression d'équipe
        return $this->render('profil/profil_deleteteam.html.twig', [
            'teamtodelete' => $teamtodelete,
            'selectedpage' => 'deleteteam',
            'teamstatus' => 'deleted',
            'notifications' => $notificationsService->getNotifications(),
        ]);
    }

    /**
     * @Route("/{_locale}/profil/profil/", name="profil_profil", requirements={"_locale"= "en|fr|es"})
     */
    public function getProfile(FileUploader $fileUploader)
    {
        //Récupération de l'utilisateur et de son avatar
        $user = $this->getUser();
        $avatar = $user->getAvatar();

        //Récupération de ses annonces
        $announcescount = $this->getDoctrine()
            ->getRepository(AnnouncesPlayers::class)
            ->find($user->getId());

        //Création du formulaire pour la modification
        //Du profil utilisateur
        $form = $this->createFormBuilder($user)
            ->add('Description', TextareaType::class, [
                "attr" => [
                    "class" => "description_profile",
                    "maxLength" => 200,
                    "placeholder" => "200 characters max",
                ]
            ])
            ->add('Agent', HiddenType::class)

            ->add(
                "avatar",
                FileType::class,
                [
                    'data_class' => null,
                    'required' => false,
                    'empty_data' => $avatar,
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid JPG/PNG image',
                        ])
                    ],

                ]
            )

            ->getForm();

        $form->handleRequest($this->request);

        //Si le formulaire est soumis et validé
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $logoFile */
            $logoFile = $form['avatar']->getData();

            if ($logoFile == $avatar) {
                $user->setAvatar($logoFile);
            } else {
                $logoFileName = $fileUploader->upload($logoFile);
                $logoFileName = "/images/teams_logo/" . $logoFileName;
                $user->setAvatar($logoFileName);
            }
            //On envoie en base de données
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
        }

        //Vue de la page profil
        return $this->render('profil/profil_profil.html.twig', [
            'selectedpage' => 'profil',
            'formMyProfile' => $form->createView(),
            'notifications' => $this->notifications,
            'Agents' => [
                'Sage',
                'Omen',
                'Viper',
                'Sova',
                'Phoenix',
                'Brimstone',
                'Cypher',
                'Breach',
                'Jett',
                'Raze'
            ],
            'announcescount' => $announcescount
        ]);
    }

    /**
     * @Route("/{_locale}/profil/new-announce/", name="profil_create_announce", requirements={"_locale"= "en|fr|es"})
     */

    public function createAnnounce()
    {
        //On récupère l'utilisateur authentifié
        $user = $this->getUser();
        $announces = new AnnouncesPlayers();

        //On determine si il a le rôle premium
        $premiumstatus = $user->getRoles();
        if ($premiumstatus[0] == "ROLE_PREMIUM") {
            $premiumstatus = "yes";
        } else {
            $premiumstatus = "no";
        }

        //On crée le formulaire pour la création d'annonce
        $form = $this->createFormBuilder($announces)
            ->add("title", TextType::class, [
                "attr" => [
                    "class" => "desc_createannounce",
                    "maxLength" => 20,
                    "placeholder" => "20 characters",
                ]
            ])
            ->add("username", HiddenType::class)
            ->add("avatar", HiddenType::class)
            ->add("agentplayed", HiddenType::class)
            ->add("description", HiddenType::class)
            ->add("level", HiddenType::class)
            ->add("status", HiddenType::class)
            ->add("date", HiddenType::class)

            ->add("french", CheckboxType::class, [
                "attr" => ["class" => "checkmarck_announce"],
                'label'    => 'French',
                'required' => false
            ])
            ->add("english", CheckboxType::class, [
                "attr" => ["class" => "checkmarck_announce"],
                'label'    => 'English',
                'required' => false
            ])
            ->add("spanish", CheckboxType::class, [
                "attr" => ["class" => "checkmarck_announce"],
                'label'    => 'Spanish',
                'required' => false
            ])

            ->getForm();

        $form->handleRequest($this->request);

        //Quand le formulaire est soumis et qu'il est valide
        if ($form->isSubmitted() && $form->isValid()) {
            $this->createdAt = new \DateTime("now");
            $announces->setDate($this->createdAt);
            $announces->setOnline("1");
            $announces->setPremiumStatus($premiumstatus);

            //On envoie la nouvelle annonce en base de données
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($announces);
            $entityManager->flush();

            return $this->redirectToRoute('profil_profil');
        }

        //Affichage de la vue : Création d'une nouvelle annonce
        return $this->render('profil/profil_createannounces.html.twig', [
            'selectedpage' => 'createannounces',
            'formAnnounces' => $form->createView(),
            'Agents' => [
                'Sage',
                'Omen',
                'Viper',
                'Sova',
                'Phoenix',
                'Brimstone',
                'Cypher',
                'Breach',
                'Jett',
                'Raze'
            ]
        ]);
    }

    /**
     * @Route("/{_locale}/profil/teams/", name="profil_teams", requirements={"_locale"= "en|fr|es"})
     */
    public function userTeams(FileUploader $fileUploader)
    {
        //On récupère tous les utilisateurs
        $members = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();


        //On récupère tous les utilisateurs
        $teamsofuser = $this->getDoctrine()
            ->getRepository(Teams::class)
            ->findBy(
                ['creator' => $this->getUser()->getUsername()]
            );

        //On compte son nombre d'équipe(s)
        $teamsofusernumber  = count($teamsofuser);

        //On crée une nouvelle équipe afin de la soumettre au formulaire
        $teams = new Teams();

        //On crée le formulaire de création d'équipe
        $form = $this->createFormBuilder($teams)
            ->add(
                "logo",
                FileType::class,
                [
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid JPG/PNG image',
                        ])
                    ],

                ]
            )
            ->add("name", TextType::class, [
                "attr" => [
                    "class" => "name_box_createteam",
                    "maxLength" => 20,
                    "placeholder" => "Squad Name (20 characters max)",
                ]
            ])
            ->add("title", TextType::class, [
                "attr" => [
                    "class" => "motto_box_createteam",
                    "maxLength" => 35,
                    "placeholder" => "Motto (35 characters)",
                ]
            ])
            ->add(
                "creator",
                HiddenType::class,
                [
                    'attr' => [
                        'value' => $this->getUser()->getUsername()
                    ]
                ]
            )
            ->add('availableslots', ChoiceType::class, [
                'choices'  => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4'
                ],
            ])
            ->add("member1", HiddenType::class, [
                "attr" => [
                    "value" => ""
                ]
            ])
            ->add("member2", HiddenType::class, [
                "attr" => [
                    "value" => ""
                ]
            ])
            ->add("member3", HiddenType::class, [
                "attr" => [
                    "value" => ""
                ]
            ])
            ->add("member4", HiddenType::class, [
                "attr" => [
                    "value" => ""
                ]
            ])
            ->add("mediumlevel", HiddenType::class)
            ->add("status", HiddenType::class)
            ->add("date", HiddenType::class)

            ->add("premium_status", CheckboxType::class, [
                "attr" => ["class" => "checkmarck_announce"],
                'label'    => 'Premium ?',
                'required' => false,
            ])
            ->getForm();

        $form->handleRequest($this->request);

        //Quand le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $logoFile */
            $logoFile = $form['logo']->getData();
            //On vérifie qu'un logo d'équipe a bien été choisit
            if ($logoFile) {
                $logoFileName = $fileUploader->upload($logoFile);
                $teams->setLogo($logoFileName);
            }
            $this->createdAt = new \DateTime("now");
            $teams->setDate($this->createdAt);

            //Et on envoit en base de données
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($teams);
            $entityManager->flush();

            return $this->redirectToRoute('profil_teams');
        }

        //Affichage de la vue création d'équipe
        return $this->render('profil/profil_teams.html.twig', [
            'selectedpage' => 'teams',
            'members'  => $members,
            'teamsofuser'  => $teamsofuser,
            'teamsofusernumber'  => $teamsofusernumber,
            'formTeams' => $form->createView(),
            'notifications' => $this->notifications,
            'Agents' => [
                'Sage',
                'Omen',
                'Viper',
                'Sova',
                'Phoenix',
                'Brimstone',
                'Cypher',
                'Breach',
                'Jett',
                'Raze'
            ]
        ]);
    }

    /**
     * @Route("/{_locale}/profil/announces/", name="profil_announces", requirements={"_locale"= "en|fr|es"})
     */

    public function announces()
    {
        //On récupère ses annonces            
        $announces = $this->getDoctrine()
            ->getRepository(AnnouncesPlayers::class)
            ->findBy(
                ['username' => $this->getUser()->getUsername()]
            );

        return $this->render('profil/profil_announces.html.twig', [
            'selectedpage' => 'announces',
            'Agents' => [
                'Sage',
                'Omen',
                'Viper',
                'Sova',
                'Phoenix',
                'Brimstone',
                'Cypher',
                'Breach',
                'Jett',
                'Raze'
            ],
            'announces' => $announces
        ]);
    }

    /**
     * @Route("/{_locale}/profil/account/", name="profil_account", requirements={"_locale"= "en|fr|es"})
     */

    public function getAccount()
    {
        // Vue "account" de l'utilisateur           
        return $this->render('profil/profil_account.html.twig', [
            'selectedpage' => 'account',
        ]);
    }


    // ! ///////////////// Work in progress///////////////////////// ! //
    // ! ///////////////// Work in progress///////////////////////// ! //
    // ! ///////////////// Work in progress///////////////////////// ! //

    //! Work in progress Feature
    /**
     * @Route("/{_locale}/profil/{friendaction}/{friend}", name="friend", requirements={"_locale"= "en|fr|es"})
     */
    public function addfriend($friend, $friendaction, NotificationsService $notificationsService)
    {

        $user = $this->getUser();

        //On récupère l'ami passé en url
        $ami = $this->getDoctrine()
            ->getRepository(User::class)
            ->findBy(
                ['username' => $friend]
            );

        //on lui ajoute cet ami 
        $user->addFriend($ami[0]);

        try {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (UniqueConstraintViolationException $e) {
            return $this->render('profil/profil_addfriend.html.twig', [
                'friendnameadded' => $friend,
                'selectedpage' => $friendaction,
                'friendadded' => 'alreadyfriend',
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }

        //Si l'utilisateur n'est pas authentifié
        //On le redirige vers la page login
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        } else {
            return $this->render('profil/profil_addfriend.html.twig', [
                'friendnameadded' => $friend,
                'selectedpage' => $friendaction,
                'friendadded' => 'newfriend',
                'notifications' => $notificationsService->getNotifications(),
            ]);
        }
    }


    //! Work in progress Feature
    /**
     * @Route("/{_locale}/friend/{sender}/{receiver}/{message}/", name="friendmsg" , requirements={"_locale"= "en|fr|es"})
     * 
     */
    public function test(PublisherInterface $publisher, $receiver, $sender, $message): Response
    {

        $update = new Update(
            'http://example.com/user/' . $receiver,
            json_encode([
                'msg' => $message,
                'sender' => $sender,
                'receiver' => $receiver
            ])
        );

        // The Publisher service is an invokable object
        $publisher($update);

        $user = $this->getUser();

        $myFriends = $user->getMyFriends();


        return $this->render('profil/profil_profil.html.twig', [
            'selectedpage' => 'publisher',
            'myFriends' => $myFriends,

        ]);
    }


    // elseif ($page == "friends" && isset($user)) {
    //     $user = $this->getUser();
    //     $id = $user->getId();

    //     $myFriends = $user->getMyFriends();
    //     $friendsWithme = $user->getfriendsWithMe();

    //     return $this->render('profil/profil_' . $page . '.html.twig', [
    //         'selectedpage' => $page,
    //         'myFriends' => $myFriends,
    //         'theyaddme' => $friendsWithme,
    //         'notifications' => $notifications

    //     ]);
    //} 

    // else {
    //     //Sinon si l'utilisateur n'est pas authentifié
    //     //Redirection vers la page login
    //     if (!$this->getUser()) {
    //         return $this->redirectToRoute('app_login');
    //     }

    //     //Ou redirection vers son profil s'il est connecté
    //     else {
    //         return $this->render('profil/profil_' . $page . '.html.twig', [
    //             'selectedpage' => $page,
    //             'notifications' => $notificationsService->getNotifications(),

    //         ]);
    //     }
    // }
}
