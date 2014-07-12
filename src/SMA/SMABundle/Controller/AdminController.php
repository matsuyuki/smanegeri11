<?php

namespace SMA\SMABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;
use SMA\SMABundle\Entity\Admin;
use SMA\SMABundle\Entity\Berita;
use SMA\SMABundle\Entity\Member;
use SMA\SMABundle\Modals\Login;

class AdminController extends Controller {

    public function AdminAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:admin');

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
                return $this->render('SMASMABundle:Admin:index.html.twig', array('name' => $user->getUserName()));
            } else {
                return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Login Gagal'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
                if ($user) {

                    return $this->render('SMASMABundle:admin:index.html.twig', array('name' => $user->getUserName()));
                }
            }
            return $this->render('SMASMABundle:Admin:admin.html.twig');
        }
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Admin');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Admin:index.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('SMASMABundle:Admin:admin.html.twig');
    }

    public function mindexAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Admin');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                $em = $this->getDoctrine()->getManager();

                $entities = $em->getRepository('SMASMABundle:Member')->findAll();

                return $this->render('SMASMABundle:Admin:mindex.html.twig', array(
                            'entities' => $entities,
                ));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function newAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Admin');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Admin:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function simpanmemberAction(Request $request) {

        $username = $this->get('request')->request->get('username');
        $password = $this->get('request')->request->get('password');
        $nama = $this->get('request')->request->get('nama');
        $email = $this->get('request')->request->get('email');
        $status = $this->get('request')->request->get('status');
        $alamat = $this->get('request')->request->get('alamat');

        $entities = new Member();
        $entities->setUsername($username);
        $entities->setPassword($password);
        $entities->setNama($nama);
        $entities->setEmail($email);
        $entities->setStatus($status);
        $entities->setAlamat($alamat);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();
        return $this->render('SMASMABundle:Admin:new.html.twig');
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Admin');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                $em = $this->getDoctrine()->getManager();

                $entity = $em->getRepository('SMASMABundle:Member')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Member entity.');
                }

                $deleteForm = $this->createDeleteForm($id);

                return $this->render('SMASMABundle:Admin:show.html.twig', array(
                            'entity' => $entity,
                            'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function editAction(Request $request, $id) {
        $member = $this->getDoctrine()->getRepository('SMASMABundle:Member')->find($id);
        if($request->getMethod()=='POST'){
            
            $username=$request->get('username');
            $password=$request->get('password');
            $nama=$request->get('nama');
            $status=$request->get('status');
            $email=$request->get('email');
            $alamat=$request->get('alamat');

            $member->setUsername($username);
            $member->setPassword($password);
            $member->setNama($nama);
            $member->setStatus($status);
            $member->setAlamat($alamat);
            $member->setEmail($email);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('member'));
    }        
        return $this->render('SMASMABundle:Admin:edit.html.twig', array('member' => $member));
    }
    
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Member')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Member entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('member'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('member_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
