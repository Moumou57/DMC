<?php

namespace DMC\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DMCDevisBundle:Default:index.html.twig');
    }

    public function editAction()
    {
        return $this->render('DMCDevisBundle:Default:index.html.twig');
    }

    public function historiqueAction()
    {
        return $this->render('DMCDevisBundle:Default:index.html.twig');
    }
}
