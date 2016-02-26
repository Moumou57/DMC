/***********************************************************
 *  JS exécuté au démarrage de toutes les pages            *
 ***********************************************************/

$(function() {
  // Par défaut on cache la ligneComposee
  $('.ressourceForm').hide();

	// On récupère la balise tr en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('div#collectionContainer'); //div#collectionContainer
    
    if ($container.length)
    {
        var $table = $('table.table');

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = $container.find('td').length;
        //console.log('Index : ' & index);
        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        if (index == 0) {
            index = addLigne($container, $table, index);
            //addDeleteLink($('.ligne'));

        } else {
          // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
          $container.children('div').each(function() {
            addDeleteLink($(this));
          });
        }

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        $('#ajout_ligne').on('click', function(e) {
          index = addLigne($container, $table, index);
          e.preventDefault(); // évite qu'un # apparaisse dans l'URL
          return false;
        });
    }
    
    // Display ou non ligneComposee si case cochée "estComposé"
    // Si cochée, on display la ligneComposee
    $( "#dmc_crudbundle_ressources_estcompose" ).on( "click", function(){
        if( $('#dmc_crudbundle_ressources_estcompose').is(':checked'))
        {
          $('.ressourceForm').show();
        }
        else
        {
          // Sinon on la cache
          $('.ressourceForm').hide();
        }

    });
});