<?php

namespace SMA\SMABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;
use SMA\SMABundle\Entity\Admin;
use SMA\SMABundle\Entity\Users;
use SMA\SMABundle\Entity\Berita;
use SMA\SMABundle\Modals\Login;

class LoginController extends Controller {

    public function LoginAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Users');

        if ($request->getMethod() == 'POST') {

            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remember = $request->get('remember');
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }
                return $this->render('SMASMABundle:Public:index.html.twig', array('name' => $user->getUserName()));
            } else {
                return $this->render('SMASMABundle:Login:login.html.twig', array('name' => 'Login Gagal'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
                if ($user) {

                    return $this->render('SMASMABundle:Public:home.html.twig', array('name' => $user->getUserName()));
                }
            }
            return $this->render('SMASMABundle:Login:login.html.twig');
        }
    }

}
