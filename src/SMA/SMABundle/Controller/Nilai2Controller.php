<?php

namespace SMA\SMABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SMA\SMABundle\Entity\Nilai2;
use SMA\SMABundle\Entity\Member;
use SMA\SMABundle\Form\Nilai2Type;

/**
 * Nilai2 controller.
 *
 */
class Nilai2Controller extends Controller
{

    /**
     * Lists all Nilai2 entities.
     *
     */
    public function indexAction()
      {
         $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMASMABundle:Member');
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $username = $login->getUsername();
            $password = $login->getPassword();
            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));
            if ($user) {
                $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SMASMABundle:Nilai2')->findAll();

        return $this->render('SMASMABundle:Nilai2:index.html.twig', array(
            'entities' => $entities,'name'=>$user->getUsername()));
            }
        }
        return $this->render('SMASMABundle:Admin:admin.html.twig', array('name' => 'Silahkan Login terlebih dahulu'));
 
        
    }
    /**
     * Creates a new Nilai2 entity.
     *
     */
    public function createAction(Request $request)
    {
        
        $entity = new Nilai2();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nilai2_show', array('id' => $entity->getId())));
        }

        return $this->render('SMASMABundle:Nilai2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Nilai2 entity.
    *
    * @param Nilai2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Nilai2 $entity)
    {
        $form = $this->createForm(new Nilai2Type(), $entity, array(
            'action' => $this->generateUrl('nilai2_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Nilai2 entity.
     *
     */
    public function newAction()
    {
        $entity = new Nilai2();
        $form   = $this->createCreateForm($entity);

        return $this->render('SMASMABundle:Nilai2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Nilai2 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMASMABundle:Nilai2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nilai2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMASMABundle:Nilai2:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Nilai2 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMASMABundle:Nilai2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nilai2 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMASMABundle:Nilai2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Nilai2 entity.
    *
    * @param Nilai2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Nilai2 $entity)
    {
        $form = $this->createForm(new Nilai2Type(), $entity, array(
            'action' => $this->generateUrl('nilai2_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Nilai2 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMASMABundle:Nilai2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nilai2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nilai2_edit', array('id' => $id)));
        }

        return $this->render('SMASMABundle:Nilai2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Nilai2 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMASMABundle:Nilai2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Nilai2 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nilai2'));
    }

    /**
     * Creates a form to delete a Nilai2 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nilai2_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
