<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SMA\SMABundle\Entity\Absensi;

/**
 * Absensi controller.
 *
 */
class AbsensiController extends Controller {

    /**
     * Lists all Absensi entities.
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
                $con = $this->getDoctrine()->getManager();
                $query = $con->createQuery(
                                'SELECT p FROM SMASMABundle:Absensi p ORDER BY p.id ASC')
                        ->setMaxResults(10);
                $berita = $query->getResult();

                return $this->render('SMASMABundle:Absensi:index.html.twig', array('entities' => $berita, 'name' => $user->getUsername()));
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
                return $this->render('SMASMABundle:Absensi:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function simpanabsensiAction(Request $request) {
        $nama = $this->get('request')->request->get('nama');
        $kelas = $this->get('request')->request->get('kelas');
        $absen = $this->get('request')->request->get('absen');
        $subkelas = $this->get('request')->request->get('subkelas');
        $tanggal = $this->get('request')->request->get('tanggal');

        $entities = new Absensi();
        $entities->setNama($nama);
        $entities->setKelas($kelas);
        $entities->setSubkelas($subkelas);
        $entities->setAbsen($absen);
        $entities->setTanggal(new \DateTime("now"));
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();

        return $this->render('SMASMABundle:absensi:new.html.twig');
    }

    /**
     * Finds and displays a Absensi entity.
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

                $entity = $em->getRepository('SMASMABundle:Absensi')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Absensi entity.');
                }

                $deleteForm = $this->createDeleteForm($id);

                return $this->render('SMASMABundle:Absensi:show.html.twig', array(
                            'entity' => $entity,
                            'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    /**
     * Displays a form to edit an existing Absensi entity.
     *
     */
    public function editAction(Request $request, $id) {
        $absensi = $this->getDoctrine()->getRepository('SMASMABundle:Absensi')->find($id);
        if ($request->getMethod() == 'POST') {

            $nama = $request->get('nama');
            $absen = $request->get('absen');
            $kelas = $request->get('kelas');
            $subkelas = $request->get('subkelas');

            $absensi->setNama($nama);
            $absensi->setKelas($kelas);
            $absensi->setAbsen($absen);
            $absensi->setSubkelas($subkelas);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('absensi'));
        }
        return $this->render('SMASMABundle:Absensi:edit.html.twig', array('absensi' => $absensi));
    }

    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Absensi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Absensi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('absensi'));
    }

    /**
     * Creates a form to delete a Absensi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('absensi_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
