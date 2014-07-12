<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SMA\SMABundle\Entity\Siswa2;


/**
 * Siswa controller.
 *
 */
class SiswaController extends Controller {

    /**
     * Lists all Siswa entities.
     *
     */
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
                        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SMASMABundle:Siswa2')->findAll();;
                
        return $this->render('SMASMABundle:Siswa:index.html.twig', array(
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
                return $this->render('SMASMABundle:Siswa:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function simpansiswaAction(Request $request) {
        $nis = $this->get('request')->request->get('nis');
        $nama = $this->get('request')->request->get('nama');
        $email = $this->get('request')->request->get('email');
        $jurusan = $this->get('request')->request->get('jurusan');
        $kelas = $this->get('request')->request->get('kelas');
        $subkelas = $this->get('request')->request->get('subkelas');
        $alamat = $this->get('request')->request->get('alamat');
        $telp = $this->get('request')->request->get('telp');
        $tglLahir = $this->get('request')->request->get('tanggal_lahir');
        $agama = $this->get('request')->request->get('agama');
        $jk = $this->get('request')->request->get('kelamin');


        $entities = new Siswa2();
        $entities->setNis($nis);
        $entities->setNama($nama);
        $entities->setEmail($email);
        $entities->setKelas($kelas);
        $entities->setSubKelas($subkelas);
        $entities->setJurusan($jurusan);
        $entities->setAlamat($alamat);
        $entities->setTelp($telp);
        $entities->setTglLahir(new \DateTime(date('d-m-y')));
        $entities->setAgama($agama);
        $entities->setJk($jk);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();

        return $this->render('SMASMABundle:siswa:new.html.twig');
    }

    /**
     * Finds and displays a Siswa entity.
     *
     */
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

        $entity = $em->getRepository('SMASMABundle:Siswa2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Siswa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMASMABundle:Siswa:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
        
        
    }

    /**
     * Displays a form to edit an existing Siswa entity.
     *
     */
    public function editAction(Request $request, $id) {
         $siswa = $this->getDoctrine()->getRepository('SMASMABundle:Siswa2')->find($id);
        if($request->getMethod()=='POST'){
            
            $nis=$request->get('nis');
            $nama=$request->get('nama');
            $jurusan=$request->get('jurusan');
            $kelas=$request->get('kelas');
            $subkelas=$request->get('subkelas');
            $telp=$request->get('telp');
            $email=$request->get('email');
            $alamat=$request->get('alamat');
            $agama=$request->get('agama');
            $jk=$request->get('jk');
            
            $siswa->setNis($nis);
            $siswa->setNama($nama);
            $siswa->setJurusan($jurusan);
            $siswa->setKelas($kelas);
            $siswa->setSubKelas($subkelas);
            $siswa->setAgama($agama);
            $siswa->setAlamat($alamat);
            $siswa->setTelp($telp);
            $siswa->setJk($jk);
            $siswa->setEmail($email);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('siswa'));
    }        
        return $this->render('SMASMABundle:Siswa:edit.html.twig', array('siswa' => $siswa));
    }


    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Siswa2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Siswa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('siswa'));
    }

    /**
     * Creates a form to delete a Siswa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('siswa_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
