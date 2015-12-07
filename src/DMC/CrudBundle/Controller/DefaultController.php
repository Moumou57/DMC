<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	public function indexAction()
    {
        return $this->render('DMCCrudBundle:Default:index.html.twig');
    }

	public function sectionArticleAction()
    {
        return $this->render('DMCCrudBundle:Default:sectionArticle.html.twig');
    }    
}