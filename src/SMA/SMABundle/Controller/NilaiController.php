<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SMA\SMABundle\Entity\Nilai;

/**
 * Nilai controller.
 *
 */
class NilaiController extends Controller {

    /**
     * Lists all Nilai entities.
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
                                'SELECT p FROM SMASMABundle:Nilai p ORDER BY p.id ASC')
                        ->setMaxResults(10);
                $berita = $query->getResult();

                return $this->render('SMASMABundle:Nilai:index.html.twig', array('entities' => $berita, 'name' => $user->getUsername()));
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
                return $this->render('SMASMABundle:Nilai:new.html.twig');
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    public function simpannilaiAction(Request $request) {
        $nama = $this->get('request')->request->get('nama');
        $nis = $this->get('request')->request->get('nis');
        $matapelajaran = $this->get('request')->request->get('matapelajaran');
        $tugas = $this->get('request')->request->get('tugas');
        $uts = $this->get('request')->request->get('uts');
        $uas = $this->get('request')->request->get('uas');
        
        $entities = new Nilai();
        $entities->setNama($nama);
        $entities->setNis($nis);
        $entities->setMatapelajaran($matapelajaran);
        $entities->setTugas($tugas);
        $entities->setUts($uts);
        $entities->setUas($uas);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entities);
        $em->flush();

        return $this->render('SMASMABundle:nilai:new.html.twig');
    }

    /**
     * Finds and displays a Nilai entity.
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

                $entity = $em->getRepository('SMASMABundle:Nilai')->find($id);

                if (!$entity) {
                    throw $this->createNotFoundException('Unable to find Nilai entity.');
                }

                $deleteForm = $this->createDeleteForm($id);

                return $this->render('SMASMABundle:Nilai:show.html.twig', array(
                            'entity' => $entity,
                            'delete_form' => $deleteForm->createView(),));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
    }

    /**
     * Displays a form to edit an existing Nilai entity.
     *
     */
    public function editAction(Request $request, $id) {
        $nilai = $this->getDoctrine()->getRepository('SMASMABundle:Nilai')->find($id);
        if ($request->getMethod() == 'POST') {

            $nama = $request->get('nama');
            $nis = $request->get('nis');
            $tugas = $request->get('tugas');
            $uts = $request->get('uts');
            $uas = $request->get('uas');
            $matapelajaran = $request->get('matapelajaran');

            $nilai->setNama($nama);
            $nilai->setNis($nis);
            $nilai->setMatapelajaran($matapelajaran);
            $nilai->setUts($uts);
            $nilai->setUas($uas);
            $nilai->setTugas($tugas);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirect($this->generateUrl('nilai'));
        }
        return $this->render('SMASMABundle:Nilai:edit.html.twig', array('nilai' => $nilai));
    }

    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Nilai')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Nilai entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nilai'));
    }

    /**
     * Creates a form to delete a Nilai entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('nilai_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
