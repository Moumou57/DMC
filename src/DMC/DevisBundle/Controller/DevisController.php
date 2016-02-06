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
    
    public function viewAction()
    {
    	// On récupère la liste des devis
		$repository = $this
	  		->getDoctrine()
		  	->getManager()
		  	->getRepository('DMCCrudBundle:EnteteDevis');
			
		$listDevis = $repository->findAll();
        
	    return $this->render('DMCDevisBundle:Devis:view.html.twig', array('devis' => $listDevis));
    }
    
    public function viewDetailAction($enteteDevisId)
    {
    	$repositoryLignes = $this
	  		->getDoctrine()
		  	->getManager()
		  	->getRepository('DMCCrudBundle:LignesDevis');
       
        $listDetailDevis = $repositoryLignes->findByEnteteDevisId($enteteDevisId);
        
        $repositoryEntete = $this
	  		->getDoctrine()
		  	->getManager()
		  	->getRepository('DMCCrudBundle:EnteteDevis');
        
        $enteteDevis = $repositoryEntete->find($enteteDevisId);

	    return $this->render('DMCDevisBundle:Devis:viewDetail.html.twig', array('detailDevis' => $listDetailDevis, 'enteteDevis' => $enteteDevis));
    }

	public function newAction(Request $request)
	{
		$repository = $this
	  		->getDoctrine()
		  	->getManager();
		

		$devis = new EnteteDevis();

		$lignes = new LignesDevis();
		
		$lignesTab = new ArrayCollection();
		
		if(!$devis->getLignes()->isEmpty())
		{
			foreach ($devis->getLignes() as $ligne) 
			{
				$lignesTab->add($ligne);
			}
		}/*
		else
		{
			$ligneNew = $devis->getLignes();
			$ligneNew->add($lignes);
			$lignesTab->add($lignes);
		}
		*/
		

		$form = $this->createForm(new EnteteDevisType(), $devis);
	
		if($form->handleRequest($request)->isValid())
		{
			$em = $this->getDoctrine()->getManager();

			/** ENTETEDEVIS ENTITY **/
			$client = $devis->getIdClient();

			$societe = new Societes();
			$societe = $devis->getIdSociete();

			$date = new \Datetime();

			$devisNum = $repository->getRepository('DMCCrudBundle:EnteteDevis')->getLastNumDevis($societe);			// return array[id]
			$devisNum = $devisNum['numDevis'] + 1;

			$devis->setNumDevis($devisNum);
			$devis->setVersion(1);

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
			//$devis->setNumDevis($numDevis);
			// Validation du formulaire pour ENTETE
			
			// remove the relationship between the Ligne and the Entete
			//$lignes
			foreach ($devis->getLignes() as $line) 
			{
				$line->setIdEntete($devis);
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