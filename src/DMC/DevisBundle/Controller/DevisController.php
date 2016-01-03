<?php

namespace DMC\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\EnteteDevis;
use DMC\CrudBundle\Entity\Clients;
use DMC\CrudBundle\Entity\Societes;

use DMC\CrudBundle\Form\EnteteDevisType;

class DevisController extends Controller
{
	public function indexAction()
    {
        return $this->render('DMCDevisBundle:Default:index.html.twig');
    }

	public function newAction(Request $request)
    {
    	$devis = new EnteteDevis();
    	//$Lignes = array();

    	$repository = $this
	  		->getDoctrine()
		  	->getManager();
/*
		$listSocietes = $repository->getRepository('DMCCrudBundle:Societes')->findAll();
		$listClients = $repository->getRepository('DMCCrudBundle:Clients')->findAll();
*/		

		$form = $this->createForm(new EnteteDevisType(), $devis);


	    // On vérifie que les valeurs entrées sont correctes
	    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	    if ($form->handleRequest($request)->isValid()) {
	      // On l'enregistre notre objet $client dans la base de données, par exemple

	      //$client = new Clients();
	      $client = $repository->getRepository('DMCCrudBundle:Clients')->find($devis->getIdClient());

	      $societe = new Societes();
	      $societe = $repository->getRepository('DMCCrudBundle:Societes')->findOneById($devis->getIdSociete());
	      $date = new \Datetime();

	      $devis->setNomclient($client->getNom());
	      $devis->setAdresseclient($client->getNom());
	      $devis->setVilleclient($client->getNom());
	      $devis->setCodepostalclient($client->getNom());
	      $devis->setPaysclient($client->getNom());
	      $devis->setBoitepostaleclient($client->getNom());
	      $devis->setIntituledevis('Test');
	      $devis->setDatecreation($date);
	      $devis->setDate($date);
	      $devis->setDateimpression($date);
	      $devis->setLieuimpression('Roodt');
	      $devis->setDeleted(false);
	      $devis->setIdClient($client);
	      $devis->setIdSociete($societe);

	      $em = $this->getDoctrine()->getManager();
	      $em->persist($devis);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'En-tête bien enregistrée.');

	      // On redirige vers la page de visualisation de l'annonce nouvellement créée
	      return $this->redirect($this->generateUrl('dmc_devis_homepage', array('id' => $devis->getId())));
	    }

		// Si on n'est pas en POST, alors on affiche le formulaire
		// On passe la méthode createView() du formulaire à la vue
	    // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('DMCDevisBundle:Devis:index.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }    
}