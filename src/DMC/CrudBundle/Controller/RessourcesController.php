<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\Ressources;


class RessourcesController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {	
    	$ress = new Ressources();
    	$ress->setId(1);
    	$ress->setDesignation("Pavé granit 60*60");
    	$ress->setFamille(1);
    	$ress->setPrix(50.23);
    	$ress->setUnite("€");
    	$ress->setEstCompose(0);

    	$em = $this->getDoctrine()->getManager();
    	$em->persist($ress);
    	$em->flush();
		//$DMCRepository = $em->getRepository('DMCCrudBundle:Ressources');
		

        return $this->render('DMCCrudBundle:Ressources:view.html.twig', array('ress' => $ress->getId()));
    }


}