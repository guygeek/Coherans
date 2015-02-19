<?php

namespace CoheransBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CoheransBundle\Entity\Organization;
use CoheransBundle\Form\OrganizationType;

/**
 * Organization controller.
 *
 * @Route("/organization")
 */
class OrganizationController extends Controller
{

    /**
     * Lists all Organization entities.
     *
     * @Route("/", name="organization")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');

        $entities = $repo->findAll();
        
  
        $htmlTree = $repo->childrenHierarchy(
            null, /* starting from root nodes */
            false, /* true: load all children, false: only direct */
            array(
                'decorate' => true,
                'representationField' => 'slug',
                'html' => true
            )
        );
        
        return array(
            'entities' => $entities,
            'htmlTree' => $htmlTree
        );
    }
    /**
     * Creates a new Organization entity.
     *
     * @Route("/", name="organization_create")
     * @Method("POST")
     * @Template("CoheransBundle:Organization:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Organization();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('organization'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Organization entity.
     *
     * @param Organization $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Organization $entity)
    {
        $form = $this->createForm(new OrganizationType(), $entity, array(
            'action' => $this->generateUrl('organization_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter', 'attr' => array('class'=>'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Organization entity.
     *
     * @Route("/new", name="organization_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Organization();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Organization entity.
     *
     * @Route("/{id}", name="organization_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');

        $entity = $repo->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organization entity.');
        }
        
        $htmlTree = $repo->childrenHierarchy(
            $entity,
            false, 
            array(
                'decorate' => true,
                'representationField' => 'slug',
                'html' => true
            )
        );        

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'htmlTree'      => $htmlTree,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Organization entity.
     *
     * @Route("/{id}/edit", name="organization_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoheransBundle:Organization')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organization entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Organization entity.
    *
    * @param Organization $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Organization $entity)
    {
        $form = $this->createForm(new OrganizationType(), $entity, array(
            'action' => $this->generateUrl('organization_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class'=>'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Organization entity.
     *
     * @Route("/{id}", name="organization_update")
     * @Method("PUT")
     * @Template("CoheransBundle:Organization:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoheransBundle:Organization')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Organization entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('organization'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Organization entity.
     *
     * @Route("/{id}", name="organization_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CoheransBundle:Organization')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Organization entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('organization'));
    }

    /**
     * Creates a form to delete a Organization entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('organization_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr' => array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
