<?php

namespace DMC\DevisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\EnteteDevis;
use DMC\CrudBundle\Entity\LignesDevis;
use DMC\CrudBundle\Entity\Clients;
use DMC\CrudBundle\Entity\Societes;

use DMC\CrudBundle\Form\EnteteDevisType;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

class DevisController extends Controller
{
	public function indexAction()
    {
        return $this->render('DMCDevisBundle:Default:index.html.twig');
    }

	public function newAction(Request $request)
    {
    	$devis = new EnteteDevis();

    	$lignes = new LignesDevis();

    	$lignesTab = new ArrayCollection();

    	if(!$devis->getLignes()->isEmpty())
    	{
	    	foreach ($devis->getLignes() as $ligne) 
	    	{
		        $lignesTab->add($ligne);
		    }
		}
		else
		{
			$ligneNew = $devis->getLignes();
			$ligneNew->add($lignes);
			$lignesTab->add($lignes);
		}
    	
    	$repository = $this
	  		->getDoctrine()
		  	->getManager();

		$form = $this->createForm(new EnteteDevisType(), $devis);
	
		if($form->handleRequest($request)->isValid())
		{
			$em = $this->getDoctrine()->getManager();

		    /** ENTETEDEVIS ENTITY **/
			$client = $repository->getRepository('DMCCrudBundle:Clients')->find($devis->getIdClient());

			$societe = new Societes();
			$societe = $repository->getRepository('DMCCrudBundle:Societes')->findOneById($devis->getIdSociete());
			$date = new \Datetime();

			$devis->setNomclient($client->getNom());
			$devis->setAdresseclient($client->getAdresse());
			$devis->setVilleclient($client->getVille());
			$devis->setCodepostalclient($client->getCodepostal());
			$devis->setPaysclient($client->getPays());
			$devis->setBoitepostaleclient($client->getBoitepostale());
			//$devis->setIntituledevis('Test');
			$devis->setDatecreation($date);
			$devis->setDate($date);
			$devis->setDateimpression($date);
			$devis->setLieuimpression($societe->getVille());
			$devis->setDeleted(false);
			$devis->setIdClient($client);
			$devis->setIdSociete($societe);

		    // Validation du formulaire pour ENTETE

	        // remove the relationship between the Ligne and the Entete
	        foreach ($lignesTab as $ligne) 
	        {
	            if (true === $devis->getLignes()->contains($ligne)) 
	            {
	                // remove the Entete from the Ligne
	                $ligne->setIdEntete($devis);
	                $ligne->setPositionmaitre(0);
	                $em->persist($ligne);
	            }
	        }

	        $em->persist($devis);
	        $em->flush();

	      	$request->getSession()->getFlashBag()->add('notice', 'Devis bien enregistré.');

	      	// On redirige vers la page de visualisation de l'annonce nouvellement créée
	     	return $this->redirect($this->generateUrl('dmc_devis_homepage', array('id' => $devis->getId())));
	   	}
	   	else
	   	{
	   		// Si on n'est pas en POST, alors on affiche le formulaire
			// On passe la méthode createView() du formulaire à la vue
		    // afin qu'elle puisse afficher le formulaire toute seule
	        return $this->render('DMCDevisBundle:Devis:index.html.twig', array(
		      'form' => $form->createView(),
		    ));
	   	}

		
    }    
}