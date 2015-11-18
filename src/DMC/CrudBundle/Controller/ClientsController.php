<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\Ressources;


class ClientsController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction($id)
    {
    	 // Ici, on récupérera le client correspondant à l'id $id
	    return $this->render('DMCCrudBundle:Clients:view.html.twig', array(
	      'id' => $id
	    ));
    }

    public function insertAction(Request $request)
	{
	// La gestion d'un formulaire est particulière, mais l'idée est la suivante :

		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		if ($request->isMethod('POST')) {
		  // Ici, on s'occupera de la création et de la gestion du formulaire

		  $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

		  // Puis on redirige vers la page de visualisation de cettte annonce
		  return $this->redirect($this->generateUrl('dmc_crud_clients_insert', array('id' => 5)));
		}

		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('DMCCrudBundle:Clients:insert.html.twig');
	}

	public function editAction($id, Request $request)
	{
		// Ici, on récupérera le client correspondant à $id

		// Même mécanisme que pour l'ajout
		if ($request->isMethod('POST')) {
		  $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

		  return $this->redirect($this->generateUrl('dmc_crud_clients_insert', array('id' => 5)));
		}

		return $this->render('DMCCrudBundle:Clients:edit.html.twig');
		}

		public function deleteAction($id)
		{
		// Ici, on récupérera le client correspondant à $id

		// Ici, on gérera la suppression du client en question

		return $this->render('DMCCrudBundle:Clients:delete.html.twig');
	}


}