<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SMA\SMABundle\Entity\Berita;
use SMA\SMABundle\Form\BeritaType;


class BeritaController extends Controller
{

    public function indexAction()
    {
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

        $entities = $em->getRepository('SMASMABundle:Berita')->findAll();

        return $this->render('SMASMABundle:Berita:index.html.twig', array(
            'entities' => $entities,
        ));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
        
    }
    
        public function newAction()
    {
      $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Admin');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                return $this->render('SMASMABundle:Berita:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }
    public function simpanberitaAction(Request $request)
    {

        $judul = $this->get('request')->request->get('judul');
        $entities = $this->get('request')->request->get('berita');
        $newEntities = str_replace("\r\n","<br>",$entities); //untuk merubah enter menjadi <br>
        
        $entities = new Berita();
        $entities->setjudul($judul);
        $entities->setIsi($newEntities);
        $entities->setTanggal(new \DateTime("now"));
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();
        
        return $this->render('SMASMABundle:Berita:new.html.twig');
    }

    public function showAction($id)
    {
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

        $entity = $em->getRepository('SMASMABundle:Berita')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Berita entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMASMABundle:Berita:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
        
        
    }

     public function editAction(Request $request, $id)
    {
        $berita = $this->getDoctrine()->getRepository('SMASMABundle:Berita')->find($id);
        if($request->getMethod()=='POST'){
            
            $judul=$request->get('judul');
            $isi=$request->get('isi');
            
            $berita->setJudul($judul);
            $berita->setIsi($isi);
            
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('berita'));
        }
        
        
        return $this->render('SMASMABundle:Berita:edit.html.twig', array('berita' => $berita));
    }

    
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Berita')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Berita entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('berita'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('berita_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
