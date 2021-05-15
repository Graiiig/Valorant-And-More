<?php
// src/Controller/LoginController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Contracts\Translation\TranslatorInterface;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Vikas5914\SteamAuth;



class LoginController extends AbstractController
{

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }


    /**
     * @Route("/{_locale}/loginold/", name="Loginold", requirements={"_locale"= "en|fr"})
     */
    public function home()
    {
        //!Connexion via steam non utilisée désormais
        $config = array(
            'apikey' => 'EFEE289AD9EF7E20B8288ED8E962F487', // Steam API KEY
            'domainname' => 'https://valorantandmore.com/fr/loginold/', // Displayed domain in the login-screen
            'loginpage' => 'https://valorantandmore.com/fr/loginold/', // Returns to last page if not set
            "logoutpage" => "https://valorantandmore.com/",
            "skipAPI" => false, // true = dont get the data from steam, just return the steamid64
        );


        $steam = new SteamAuth($config);

        if ($steam->loggedIn()) {
            $personaname = $steam->personaname;
            $logout = $steam->logout();

            $this->session->set('pseudo', $steam->personaname);

            return $this->render('Login/login.html.twig', [
                'personaname' => $this->session->get('pseudo'),
                'login' => $steam->logout(),


            ]);
        } else {

            return $this->render('Login/login.html.twig', [
                'login' => $steam->loginUrl(),
                'personaname' => 'login'


            ]);
        }
    }

    //!Connexion via google non utilisée désormais
    /**
     * @Route("/{_locale}/google_login/", name="google_login", requirements={"_locale"= "en|fr"})
     */
    public function google_session()
    {
        return $this->render('Login/login.html.twig', [
            'socials' => 'rr',


        ]);
    }
}
