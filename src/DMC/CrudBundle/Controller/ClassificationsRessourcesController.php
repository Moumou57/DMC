<?php

namespace DMC\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use DMC\CrudBundle\Entity\ClassificationsRessources;


class ClassificationsRessourcesController extends Controller
{
	public function indexAction()
    {
        return new Response("Hello World - index!");
    }

    public function viewAction()
    {
        // On récupère la liste des classifications ressources 
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('DMCCrudBundle:ClassificationsRessources');
            

        $listClassificationsRessources = $repository->findAll();

        return $this->render('DMCCrudBundle:ClassificationsRessources:view.html.twig', array('classificationsRessources' => $listClassificationsRessources));
    }

    public function insertAction(Request $request)
    {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

         // On crée un objet ressource
        $classificationRessource = new ClassificationsRessources();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $classificationRessource);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('designation', 'text')
            ->add('idFamille', 'text', array('required' => false))
            ->add('save', 'submit')
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
          $em->persist($classificationRessource);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Classification ressource bien enregistrée.');

          // On redirige vers la page de visualisation de l'annonce nouvellement créée
          return $this->redirect($this->generateUrl('dmc_crud_classificationsRessources_view'));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('DMCCrudBundle:ClassificationsRessources:insert.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function editAction($id, Request $request)
    {
        // Ici, on récupérera le ressource correspondant à $id

        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST')) {
          $request->getSession()->getFlashBag()->add('notice', 'Classification ressource bien modifiée.');

          return $this->redirect($this->generateUrl('dmc_crud_classificationsRessources_insert', array('id' => 5)));
        }

        return $this->render('DMCCrudBundle:ClassificationsRessources:edit.html.twig');
        }

        public function deleteAction($id)
        {
        // Ici, on récupérera le ressource correspondant à $id

        // Ici, on gérera la suppression du ressource en question

        return $this->render('DMCCrudBundle:ClassificationsRessources:delete.html.twig');
    }


}