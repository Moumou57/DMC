$(document).ready(function() {

	// On récupère la balise tr en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('div#collectionContainer'); //div#collectionContainer
    var $table = $('table.table');

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
   	$('#ajout_ligne').on('click', function(e) {
      addLigne($container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find('td').length;
    //console.log('Index : ' & index);
    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
    	addLigne($container);
    	//addDeleteLink($('.ligne'));
    	
    } else {
      // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
      $container.children('div').each(function() {
        addDeleteLink($(this));
      });
    }

    // La fonction qui ajoute un formulaire Ligne
    function addLigne($container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte "__name__" qu'il contient par le numéro du champ
      // dmc_crudbundle_entetedevis_lignes_0_type
    	
    	var $prototype = $($container.attr('data-prototype')
        	.replace(/__name__/g, index)
        	);
		
      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink($prototype);

      // On ajoute le prototype modifié à la fin de la balise tr
      $table.append($prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une ligne
    function addDeleteLink($prototype) {
      // Création du lien
      $deleteLink = $('<td style="width:1%;"><a href="#" class="btn btn-danger">Supprimer</a></td>');

      // Ajout du lien
      $prototype.append($deleteLink);

      // Ajout du listener sur le clic du lien
      $deleteLink.on('click', function(e) {
        $prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }

    function majPositions($table){
    	var lastRow = $table.rows[ table.rows.length - 1 ];
    }

});