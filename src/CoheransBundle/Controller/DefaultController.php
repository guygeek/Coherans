<?php

namespace CoheransBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
    * @Route("/", name="homepage")
    * */
    public function indexAction()
    {
        $nbOrganizations = count($this->getDoctrine()->getRepository('CoheransBundle:Organization')->findAll());
        
        return $this->render('CoheransBundle:Default:index.html.twig',array('nbOrganizations'=>$nbOrganizations));
    }
}
