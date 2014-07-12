<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SMA\SMABundle\Entity\Pegawai2;

/**
 * Pegawai controller.
 *
 */
class PegawaiController extends Controller {

    /**
     * Lists all Pegawai entities.
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

        $entities = $em->getRepository('SMASMABundle:Pegawai2')->findAll();

        return $this->render('SMASMABundle:Pegawai:index.html.twig', array(
                    'entities' => $entities,
        ));;
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
                return $this->render('SMASMABundle:Pegawai:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function simpanguruAction(Request $request) {
        $nis = $this->get('request')->request->get('nis');
        $nama = $this->get('request')->request->get('nama');
        $email = $this->get('request')->request->get('email');
        $jabatan = $this->get('request')->request->get('jabatan');
        $bidang = $this->get('request')->request->get('bidang');
        $alamat = $this->get('request')->request->get('alamat');
        $telp = $this->get('request')->request->get('telp');
        $tglLahir = $this->get('request')->request->get('tanggal_lahir');
        $agama = $this->get('request')->request->get('agama');
        $jk = $this->get('request')->request->get('kelamin');


        $entities = new Pegawai2();
        $entities->setNis($nis);
        $entities->setNama($nama);
        $entities->setEmail($email);
        $entities->setJabatan($jabatan);
        $entities->setBidang($bidang);
        $entities->setAlamat($alamat);
        $entities->setTelp($telp);
        $entities->setTglLahir(new \DateTime(date('d-m-y')));
        $entities->setAgama($agama);
        $entities->setJk($jk);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();

      return $this->render('SMASMABundle:Pegawai:new.html.twig');
        }
        
        
        /**
         * Finds and displays a Pegawai entity.
         *
         */
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

        $entity = $em->getRepository('SMASMABundle:Pegawai2')->find($id);

        if (!$entity) {
        throw $this->createNotFoundException('Unable to find Pegawai entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMASMABundle:Pegawai:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
            
        
    }

    /**
     * Displays a form to edit an existing Pegawai entity.
     *
     */
    public function editAction(Request $request, $id) {
         $pegawai = $this->getDoctrine()->getRepository('SMASMABundle:Pegawai2')->find($id);
        if($request->getMethod()=='POST'){
            
            $nis=$request->get('nis');
            $nama=$request->get('nama');
            $jabatan=$request->get('jabatan');
            $bidang=$request->get('bidang');
            $telp=$request->get('telp');
            $email=$request->get('email');
            $alamat=$request->get('alamat');
            $agama=$request->get('agama');
            $jk=$request->get('jk');
            
            $pegawai->setNis($nis);
            $pegawai->setNama($nama);
            $pegawai->setJabatan($jabatan);
            $pegawai->setBidang($bidang);
            $pegawai->setAgama($agama);
            $pegawai->setAlamat($alamat);
            $pegawai->setTelp($telp);
            $pegawai->setJk($jk);
            $pegawai->setEmail($email);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('pegawai'));
    }        
        return $this->render('SMASMABundle:Pegawai:edit.html.twig', array('pegawai' => $pegawai));
    }

    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Pegawai2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pegawai entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pegawai'));
    }

    /**
     * Creates a form to delete a Pegawai entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('pegawai_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
