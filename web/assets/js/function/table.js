/********************************************************************
 *  Fonctions JS relatives à la manipulation des tables/listes      *
 ********************************************************************/

// La fonction qui ajoute un formulaire Ligne
function addLigne($container, $table, index) {
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

    return index;
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

function openLigneDetail()
{
    $("table").on('click', 'tr', function() {
        window.location = $(this).data("href");
    });
}