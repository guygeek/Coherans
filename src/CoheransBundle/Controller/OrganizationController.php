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
 * @Route("/organization")
 */
class OrganizationController extends Controller
{
    /**
     * @Route("/", name="organization")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');
        $organizations = $repo->findAll();
        
        $htmlTree = $repo->childrenHierarchy(
            null, /* starting from root nodes */
            false, /* true: load all children, false: only direct */
            array(
                'decorate' => true,
                'representationField' => 'slug',
                'html' => true
            )
        );
        return $this->render('CoheransBundle:Organization:index.html.twig', 
                array(
                    'organizations' => $organizations,
                    'htmlTree' => $htmlTree
                )
        );
    }
    
     /**
     * @Route("/", name="organization_create")
     * @Method("POST")
     * @Template("CoheransBundle:Organization:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $organization = new Organization();
        
        $form = $this->createForm('organization', $organization);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $repo = $this->getDoctrine()->getManager();
            $repo->persist($organization);
            $repo->flush();

            return $this->redirect($this->generateUrl('organization_show', array('id' => $organization->getId())));
        }

        return array(
            'organization' => $organization,
            'form'   => $form->createView(),
        );
    } 
    

    
    /**
    * @Route("/new", name="organization_new")
    * @Method("GET")
    * @Template() 
    * */
    public function newAction(Request $request)
    {
        $organization = new Organization();

        $form = $this->createForm('organization', $organization);
        return $this->render('CoheransBundle:Organization:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/{id}", name="organization_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');
        $organization = $repo->find($id);

        if (!$organization) {
            throw $this->createNotFoundException('Unable to find Organization organization.');
        }
        
        $htmlTree = $repo->childrenHierarchy(
            $organization,
            false, 
            array(
                'decorate' => true,
                'representationField' => 'slug',
                'html' => true
            )
        );

        return array(
            'organization' => $organization,
            'htmlTree'   => $htmlTree
        );
    }
    /**
     * @Route("/{id}/edit", name="organization_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');
        $organization = $repo->find($id);
        
        if (!$organization) {
            throw $this->createNotFoundException('Unable to find Organization organization.');
        }

        $form = $this->createForm('organization', $organization);
        
        return $this->render('CoheransBundle:Organization:edit.html.twig', array(
            'form' => $form->createView(),
            'organization' => $organization
        ));

    }
    


    /**
     * @Route("/{id}", name="organization_update")
     * @Method("PUT")
     * @Template("CoheransBundle:Organization:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository('CoheransBundle:Organization');
        $organization = $repo->find($id);
        
        if (!$organization) {
            throw $this->createNotFoundException('Unable to find Organization organization.');
        }
        
        $form = $this->createForm('organization', $organization);
        $form->handleRequest($request);
            
        if ($form->isValid()) {
            $repo->flush();

            return $this->redirect($this->generateUrl('organization_show', array('id' => $id)));
        }


        return array(
            'form'   => $form,
            'organization' => $organization
        );        

    }
    
    /**
     * @Route("/{id}", name="organization_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $repo = $this->getDoctrine()->getManager();
            $organization = $repo->getRepository('CoheransBundle:Organization')->find($id);

            if (!$organization) {
                throw $this->createNotFoundException('Unable to find Organization organization.');
            }

            $repo->remove($organization);
            $repo->flush();
        }

        return $this->redirect($this->generateUrl('organization'));
    }

  
}
