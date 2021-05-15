<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Guard\AuthenticatorInterface;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class NewaccountController extends AbstractController
{

    /**
     * @Assert\DateTime
     * @var string A "Y-m-d H:i:s" formatted value
     */
    protected $createdAt;

    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }


    /**
     * @Route("/{_locale}/newaccount", name="newaccount", requirements={"_locale"= "en|fr|es"})
     */
    public function create(Request $request, \Swift_Mailer $mailer, TranslatorInterface $translator)
    {

        //Récupération des traductions
        $username = $translator->trans('usernameform');
        $email = $translator->trans('emailform');
        $password = $translator->trans('passwordform');
        $repeatpassword = $translator->trans('repeatpasswordform');

        //Création d'un nouvel utilisateur 
        //Et création du formulaire d'inscription
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('Username', TextType::class, [
                 "label" => $username.' :' 
            ])
            ->add ('Email', EmailType::class, [
                "label" => $email.' :' 
           ])
            ->add('Password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => $password.' :'],
                'second_options' => ['label' => $repeatpassword.' :'],
            ])
            ->getForm();
        
        //Soumission du formulaire avec certains champs par défaut
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            
            $user->setPassword($this->passwordEncoder->encodePassword(
                             $user,
                             $user->getPassword()
                         ));
            
            $user->setRoles(['ROLE_NOTVERIFIED']);
            $user->setAgent("none_configured");
            $user->setAvatar("/images/Avatars/Defaults/purpledefaultavatar.jpg");
            $user->setLevel("Beginner");
            $user->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam praesentium nisi dolorum dignissimos dicta perferendis tenetur iste ");
            $this->createdAt = new \DateTime("now");
            $user->setDateSignIn($this->createdAt);

            //Sauvegarde dans la base de données
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            
            //Envoie du mail de bienvenue
            $message = (new \Swift_Message('Welcome to Valorant and More '.$user->getUsername().' !' ))
            ->setFrom('no-reply@valorantandmore.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->renderView(
                    'emails/registration.html.twig',
                    ['username' => $user->getUsername(),
                     'email' => $user->getEmail(),
                     'id' => $user->getId(),
                    ]
                ),
                'text/html'
            );
    
        $mailer->send($message);

        //Redirection vers "app_login" pour que l'utilisateur puisse
        //S'authentifier
        return $this->redirectToRoute('app_login');
        }

        return $this->render('newaccount/index.html.twig', [
            'formAccount' => $form->createView()
        ]);
    }

    /**
     * @Route("/{username}/{user}/activate", name="activate")
     */
    public function activate($username, User $user){

        $entityManager = $this->getDoctrine()->getManager();
        $usernamedb = $user->getUsername();
        $rolesdb = $user->getRoles();
        $rolesdb = $rolesdb[0];

        if ($usernamedb === $username && $rolesdb == 'ROLE_NOTVERIFIED' ){
            $user->setRoles(['ROLE_MEMBER']);
            $entityManager->flush();
            return $this->redirectToRoute('app_login');
        }

        elseif ($usernamedb === $username && $rolesdb == 'ROLE_MEMBER' ){
            return $this->render('newaccount/mail.html.twig', ['scenario' => "activationyet"]);
        }

        else{
            return $this->render('newaccount/mail.html.twig', ['scenario' => "wentwrong"]);
        }

    }



}
