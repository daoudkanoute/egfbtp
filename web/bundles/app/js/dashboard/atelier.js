// Sélection de la catégorie parente
var mainCategory = document.getElementById('selectCategory');

// Quand il y a changement d'option de la catégorie parente
mainCategory.addEventListener('change', function () {

    /**
     * Requête ajax
     */
    var form = document.querySelector('form');

    // Création de l'objet data
    var data = new FormData();
    data.append(mainCategory.name, mainCategory.value);

    // On envoie une requête ajax POST
    ajaxPost(form.action, data, function (res) {

        var subCategory = document.getElementById('subCategory');
        var selectSubCategory = document.getElementById('selectSubCategory');

        // On parse la réponse en DOM HTML
        var parser = new DOMParser();
        var doc = parser.parseFromString(res, 'text/html');

        // On remplace la sous-catégorie actuelle par la nouvelle sous-catégorie
        subCategory.replaceChild(doc.getElementById('selectSubCategory'), selectSubCategory);

        // Suppression du disabled
        selectSubCategory = document.getElementById('selectSubCategory');
        selectSubCategory.removeAttribute('disabled');

        // Suppression du placeholder sous-catégorie
        selectSubCategory.addEventListener('change', function () {
            removePlaceholder('selectSubCategory')
        });

    });

    // Supression du placeholder catégorie
    removePlaceholder('selectCategory');

});

/**
 * Suppression du placeholder
 * @param id
 */
function removePlaceholder(id) {
    var options = document.querySelectorAll('#' + id + ' option');

    for (var i = 0; i < options.length; i++) {
        if (options[i].value === '') {
            options[i].remove();
        }
    }
}