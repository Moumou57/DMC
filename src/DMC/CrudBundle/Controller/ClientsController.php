<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\Clients;


class ClientsController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {
    	 // Ici, on récupérera le client correspondant à l'id $id
	    return $this->render('DMCCrudBundle:Clients:view.html.twig');
    }

    public function insertAction(Request $request)
	{
	// La gestion d'un formulaire est particulière, mais l'idée est la suivante :

		 // On crée un objet Client
	    $client = new Clients();

	    // On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder('form', $client);

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	    	->add('nom', 'text')
	    	->add('adresse', 'text')
	    	->add('ville', 'text')
	    	->add('codepostal', 'text')
	    	->add('pays', 'text')
	    	->add('boitepostal', 'text')
	    	->add('telephone', 'text')
	    	->add('email', 'email')
	    	->add('save', 'submit')
	    	->getForm();

	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();

		// On fait le lien Requête <-> Formulaire
	    // À partir de maintenant, la variable $client contient les valeurs entrées dans le formulaire par le visiteur
	    $form->handleRequest($request);

	    // On vérifie que les valeurs entrées sont correctes
	    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	    if ($form->isValid()) {
	      // On l'enregistre notre objet $client dans la base de données, par exemple
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($client);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistré.');

	      // On redirige vers la page de visualisation de l'annonce nouvellement créée
	      return $this->redirect($this->generateUrl('dmc_crud_clients_view', array('id' => $client->getId())));
	    }

		// Si on n'est pas en POST, alors on affiche le formulaire
		// On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('DMCCrudBundle:Clients:insert.html.twig', array(
	      'form' => $form->createView(),
	    ));
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