<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\Societes;


class SocietesController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {
    	// On récupère la liste des societes
		$repository = $this
	  		->getDoctrine()
		  	->getManager()
		  	->getRepository('DMCCrudBundle:Societes');
			

		$listSocietes = $repository->findAll();

	    return $this->render('DMCCrudBundle:Societes:view.html.twig', array('societes' => $listSocietes));
    }

    public function insertAction(Request $request)
	{
	// La gestion d'un formulaire est particulière, mais l'idée est la suivante :

		 // On crée un objet societe
	    $societe = new Societes();

	    // On crée le FormBuilder grâce au service form factory
	    $formBuilder = $this->get('form.factory')->createBuilder('form', $societe);

	    // On ajoute les champs de l'entité que l'on veut à notre formulaire
	    $formBuilder
	    	->add('nomsociete', 'text')
	    	->add('nomlegal', 'text')
	    	->add('capitalsocial', 'text')
	    	->add('iblc', 'text')
	    	->add('tva', 'text')
	    	->add('bcee', 'text')
	    	->add('adresse', 'text')
	    	->add('boitepostale', 'text')
	    	->add('codepostal','text')
	    	->add('ville','text')
	    	->add('telephone', 'text')
	    	->add('fax', 'text')
	    	->add('siteweb', 'text')
	    	->add('email', 'email')
	    	->add('imagepath','text')
	    	->add('save', 'submit')
	    	->getForm();

	    // À partir du formBuilder, on génère le formulaire
	    $form = $formBuilder->getForm();

		// On fait le lien Requête <-> Formulaire
	    // À partir de maintenant, la variable $societe contient les valeurs entrées dans le formulaire par le visiteur
	    $form->handleRequest($request);

	    // On vérifie que les valeurs entrées sont correctes
	    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	    if ($form->isValid()) {
	      // On l'enregistre notre objet $societe dans la base de données, par exemple
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($societe);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Société bien enregistrée.');

	      // On redirige vers la page de visualisation de l'annonce nouvellement créée
	      return $this->redirect($this->generateUrl('dmc_crud_societes_view', array('id' => $societe->getId())));
	    }

		// Si on n'est pas en POST, alors on affiche le formulaire
		// On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('DMCCrudBundle:Societes:insert.html.twig', array(
	      'form' => $form->createView(),
	    ));
	}

	public function editAction($id, Request $request)
	{
		// Ici, on récupérera le societe correspondant à $id

		// Même mécanisme que pour l'ajout
		if ($request->isMethod('POST')) {
		  $request->getSession()->getFlashBag()->add('notice', 'Société bien modifiée.');

		  return $this->redirect($this->generateUrl('dmc_crud_societes_insert', array('id' => 5)));
		}

		return $this->render('DMCCrudBundle:Societes:edit.html.twig');
		}

		public function deleteAction($id)
		{
		// Ici, on récupérera le societe correspondant à $id

		// Ici, on gérera la suppression du societe en question

		return $this->render('DMCCrudBundle:Societes:delete.html.twig');
	}


}