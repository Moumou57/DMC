<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use DMC\CrudBundle\Entity\Ressources;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RessourcesController
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {
    	$ress = new Ressources;
    	$ress->setId(3);
        return $this->render('DMCCrudBundle:Ressources:view.html.twig', array(
      		'ress' => $ress
    	));
    }
}