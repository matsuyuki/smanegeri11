<?php

namespace SMA\SMABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SMA\SMABundle\Modals\Login;
use SMA\SMABundle\Entity\Berita;
use SMA\SMABundle\Entity\Member;

class PublicController extends Controller {

    public function about2Action() {

        return $this->render('SMASMABundle:Public:about2.html.twig');
    }

    public function profil2Action() {

        return $this->render('SMASMABundle:Public:profil2.html.twig');
    }

    public function login2Action(Request $request) {

        return $this->render('SMASMABundle:Public:login.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('SMASMABundle:Public:login.html.twig');
    }

    public function loginAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');

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
                return $this->render('SMASMABundle:Public:about.html.twig', array('name' => $user->getUsername()));
            } else {
                return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Login Gagal'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
                if ($user) {

                    return $this->render('SMASMABundle:public:about.html.twig', array('name' => $user->getUsername()));
                }
            }
            return $this->render('SMASMABundle:Public:login.html.twig');
        }
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                $con = $this->getDoctrine()->getManager();
                $query = $con->createQuery(
                                'SELECT p FROM SMASMABundle:Berita p ORDER BY p.id DESC')
                        ->setMaxResults(25);
                $berita = $query->getResult();

                return $this->render('SMASMABundle:Public:index.html.twig', array('berita' => $berita, 'name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function aboutAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Public:about.html.twig', array('name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function showberitaAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                $entity = $this->getDoctrine()
                        ->getRepository('SMASMABundle:Berita')
                        ->find($id);

                if (!$entity) {
                    //throw $this->createNotFoundException('No data found');
                    return $this->render('SMASMABundle:Public:showberita.html.twig', array('error' => 'data tidak tersedia'));
                }
                return $this->render('SMASMABundle:Public:showberita.html.twig', array('entity' => $entity));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function profilAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Public:profil.html.twig', array('name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function downloadAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Public:download.html.twig', array('name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function kelasAction() {


        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Public:kelas.html.twig', array('name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function pegawaiAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Public:pegawai.html.twig', array('name' => $user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function welcomeAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $con = $this->getDoctrine()->getManager();
        $query = $con->createQuery(
                        'SELECT p FROM SMASMABundle:Berita p ORDER BY p.id DESC')
                ->setMaxResults(25);
        $berita = $query->getResult();

        return $this->render('SMASMABundle:Public:welcome.html.twig', array('berita' => $berita));
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
                return $this->render('SMASMABundle:Public:index.html.twig', array('name' => $user->getUsername()));
            } else {
                return $this->render('SMASMABundle:Public:welcome.html.twig', array('name' => 'Login Gagal'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
                if ($user) {

                    return $this->render('SMASMABundle:Public:index.html.twig', array('name' => $user->getUserName()));
                }
            }
            return $this->render('SMASMABundle:Public:welcome.html.twig');
        }
    }

    public function kelas1Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 1,'subkelas'=>1));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas1.html.twig', array(
                    'entity1' => $tbl,));
    }
    
    public function kelas11Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 1,'subkelas'=>2));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas11.html.twig', array(
                    'entity1' => $tbl,));
    }
    
    public function kelas211Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 2,'subkelas'=>1,'jurusan'=>'IPA'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas211.html.twig', array(
                    'entity1' => $tbl,));
    }
    public function kelas212Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 2,'subkelas'=>2,'jurusan'=>'IPA'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas212.html.twig', array(
                    'entity1' => $tbl,));
    }

    public function kelas221Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 2,'subkelas'=>1,'jurusan'=>'IPS'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas221.html.twig', array(
                    'entity1' => $tbl,));
    }
    public function kelas222Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 2,'subkelas'=>2,'jurusan'=>'IPS'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas222.html.twig', array(
                    'entity1' => $tbl,));
    }

    
    public function kelas311Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 3,'subkelas'=>1,'jurusan'=>'IPA'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas311.html.twig', array(
                    'entity1' => $tbl,));
    }
    public function kelas312Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 3,'subkelas'=>2,'jurusan'=>'IPA'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas312.html.twig', array(
                    'entity1' => $tbl,));
    }

    public function kelas321Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 3,'subkelas'=>1,'jurusan'=>'IPS'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas321.html.twig', array(
                    'entity1' => $tbl,));
    }
    public function kelas322Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Siswa2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 3,'subkelas'=>2,'jurusan'=>'IPS'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:kelas322.html.twig', array(
                    'entity1' => $tbl,));
    }

    

    public function pegawai1Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Pegawai2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('jabatan' => 'Wali Kelas'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        return $this->render('SMASMABundle:Public:pegawai1.html.twig', array(
                    'entity1' => $tbl,));
    }

    public function pegawai2Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Pegawai2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('jabatan' => 'Guru'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Pegawai entity.');
        }

        return $this->render('SMASMABundle:Public:pegawai2.html.twig', array(
                    'entity1' => $tbl,));
    }

    public function pegawai3Action() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:pegawai2')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('jabatan' => 'Honorer'));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Pegawai entity.');
        }

        return $this->render('SMASMABundle:Public:pegawai3.html.twig', array(
                    'entity1' => $tbl));
    }
    public function showmemberAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                //$username = getUsername();
                $entity = $this->getDoctrine()
                        ->getRepository('SMASMABundle:Member')
                        ->find($user);

                if (!$entity) {
                    //throw $this->createNotFoundException('No data found');
                    return $this->render('SMASMABundle:Public:showmember.html.twig', array('error' => 'data tidak tersedia'));
                }
                return $this->render('SMASMABundle:Public:showmember.html.twig', array('entity' => $entity,'name' => $user->getUserName()));
            }
        }
        return $this->render('SMASMABundle:Public:login.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
        
    }
    public function membereditAction(Request $request, $id) {
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
        return $this->render('SMASMABundle:Public:memberedit.html.twig', array('member' => $member));
    }
    
    public function absensiAction() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Absensi')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('kelas' => 1,'subkelas'=>2));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Absensi entity.');
        }

        return $this->render('SMASMABundle:Public:absensi.html.twig', array(
                    'entity1' => $tbl,));
    }
    public function nilaiAction() {

        $em = $this->getDoctrine()->getManager();
        $tbl = $this->getDoctrine()
                ->getRepository('SMASMABundle:Nilai')
                //->findByUserGuru($username)->findByStatus('new');
                ->findBy(array('nis' =>6110801));


        if (!$tbl) {
            throw $this->createNotFoundException('Unable to find Absensi entity.');
        }

        return $this->render('SMASMABundle:Public:nilai.html.twig', array(
                    'entity1' => $tbl,));
    }    
}
