<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Assert\DateTime
     * @var string A "Y-m-d H:i:s" formatted value
     */
    protected $createdAt;

    public function load(ObjectManager $manager)
    {

        $agents = array("Jett", "Cypher", "Sova", "Brimstone", "Breach", "Phoenix", "Omen", "Sage", "Viper", "Raze");

        for ($i = 0; $i < 100; $i++) {

            $rand_agent = array_rand($agents, 1);

            $this->createdAt = new \DateTime("now");


            $user = new User();

            $user->setUsername('Member'.$i);
            $user->setEmail('totodu12'.$i.'@hotmail.fr');
            $user->setAgent($agents[$rand_agent]);
            $user->setRoles(["ROLE_MEMBER"]);
            $user->setRoles(["ROLE_MEMBER"]);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'the_new_password'
            ));
            $user->setAvatar("https://valorantandmore.com/images/Avatars/Defaults/purpledefaultavatar.jpg");
            $user->setLevel("Beginner");
            $user->setDateSignIn($this->createdAt);
            $user->setDescription("Salut j'adore jouer".$rand_agent);

            $manager->persist($user);

        }
        
        $manager->flush();
    }
}
