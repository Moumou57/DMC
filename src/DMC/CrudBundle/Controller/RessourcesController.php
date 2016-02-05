<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\Ressources;
use DMC\CrudBundle\Entity\ComposesRessources;

use DMC\CrudBundle\Form\RessourcesType;
use DMC\CrudBundle\Form\ComposesRessourcesType;
use DMC\CrudBundle\Form\RessourcesFormType;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

class RessourcesController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager();
        // On récupère la liste des 
        $repoRessources = $repository->getRepository('DMCCrudBundle:Ressources');
        $repoCompoRessources = $repository->getRepository('DMCCrudBundle:ComposesRessources');
        $repoRessCompRessources = $repository->getRepository('DMCCrudBundle:Ressources');

        $listRessources = $repoRessources->findAll();

        return $this->render('DMCCrudBundle:Ressources:view.html.twig', array('ressources' => $listRessources, 'titre' => 'Ressources'));
    }
/*
    public function insertAction(Request $request)
    {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

         // On crée un objet ressource
        $ressource = new Ressources();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $ressource);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('designation', 'text')
            ->add('famille', 'text')
            ->add('unite', 'text')
            ->add('prix', 'text')
            ->add('estcompose', 'checkbox', array('required' => false))
            ->getForm();

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $ressource contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
          // On l'enregistre notre objet $ressource dans la base de données, par exemple
          $em = $this->getDoctrine()->getManager();
          $em->persist($ressource);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Ressource bien enregistrée.');

          // On redirige vers la page de visualisation de l'annonce nouvellement créée
          if ($this->getRequest()->request->get('submitAction') == 'save')
            {
                return $this->redirect($this->generateUrl('dmc_crud_ressources_view', array('id' => $ressource->getId())));
            }
            elseif ($this->getRequest()->request->get('submitAction') == 'saveandadd')
            {
                return $this->redirect($this->generateUrl('dmc_crud_ressources_insert'));
            }

        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('DMCCrudBundle:Ressources:insert.html.twig', array(
          'form' => $form->createView(),
        ));
    }
*/
    public function insertAction(Request $request)
    {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

         // On crée un objet ressource
        $ressource = new Ressources();
        $ressource2 = new Ressources();
        $ressourcesTab = new ArrayCollection();

        $compoRessources = new ComposesRessources();
        $compoRessourcesTab = new ArrayCollection();

        // ---------------------------------------------------- Article ---> Composé
        if(!$ressource->getLignesComposees()->isEmpty())
        {
            foreach ($ressource->getLignesComposees() as $compose) 
            {
                $compoRessourcesTab->add($compose);
            }
        }
        else
        {
            $composeNew = $ressource->getLignesComposees();
            $composeNew->add($ressource2);
            $ressourcesTab->add($ressource2);
        }

        //$compoRessources->setRessource($ressource2);

        $form = $this->createForm(new RessourcesType(), $ressource);

        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($ressource);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Devis bien enregistré.');
        }
        else
        {
            return $this->render('DMCCrudBundle:Ressources:insert.html.twig', array(
                'form' => $form->createView(),
            ));
        }
        
    }

    public function editAction($id, Request $request)
    {
        // Ici, on récupérera le ressource correspondant à $id

        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST')) {
          $request->getSession()->getFlashBag()->add('notice', 'Ressource bien modifiée.');

          return $this->redirect($this->generateUrl('dmc_crud_ressources_insert', array('id' => 5)));
        }

        return $this->render('DMCCrudBundle:Ressources:edit.html.twig');
    }

    public function deleteAction($id)
    {
        // Ici, on récupérera le ressource correspondant à $id

        // Ici, on gérera la suppression du ressource en question

        return $this->render('DMCCrudBundle:Ressources:delete.html.twig');
    }

    public function listAchatsAction()
    {
       $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('DMCCrudBundle:Ressources');

       $listAchats = $repository->getListAchats(false);
       
       return $this->render('DMCCrudBundle:Ressources:view.html.twig', array('ressources' => $listAchats, 'titre' => 'Achats'));
    }

    public function listComposesAction()
    {
       $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('DMCCrudBundle:Ressources');

       $listAchats = $repository->getListAchats(true);
       
       return $this->render('DMCCrudBundle:Ressources:view.html.twig', array('ressources' => $listAchats, 'titre' => 'Articles composés'));
    }

}