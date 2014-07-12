<?php
namespace SMA\SMABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FacebookController extends Controller {
    public function indexAction() {
             $con = $this->getDoctrine()->getManager();
        $query = $con->createQuery(
                        'SELECT p FROM SMASMABundle:Berita p ORDER BY p.id DESC')
                ->setMaxResults(25);
        $berita = $query->getResult();

        return $this->render('SMASMABundle:Facebook:index.html.twig', array('berita' => $berita));
    }
    public function showberitaAction($id) {
        $entity = $this->getDoctrine()
                ->getRepository('SMASMABundle:Berita')
                ->find($id);

        if (!$entity) {
            //throw $this->createNotFoundException('No data found');
            return $this->render('SMASMABundle:Facebook:showberita.html.twig', array('error' => 'data tidak tersedia'));
        }
        return $this->render('SMASMABundle:Facebook:showberita.html.twig', array('entity' => $entity));
    }
public function about2Action() {

        return $this->render('SMASMABundle:Facebook:about2.html.twig');
    }
    
    public function profil2Action() {

        return $this->render('SMASMABundle:Facebook:profil2.html.twig');
    }
 public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('SMASMABundle:Public:about2.html.twig');
    }
}