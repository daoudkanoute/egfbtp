//Get Event from Selected Atelier
function changeAtelier() {
    /**
     * Requête ajax
     */
    var form = document.querySelector('form');

    // Création de l'objet data
    var data = new FormData();
    data.append(this.name, this.value);
    var id = this.getAttribute("id");
    id = id.replace('_atelier','_event');

    // On envoie une requête ajax POST
    ajaxPost(form.action, data, function (res) {

        var eventSelect          = document.getElementById(id);
        var eventSelectContainer = document.getElementById(id).parentElement;

        // On parse la réponse en DOM HTML
        var parser = new DOMParser();
        var doc = parser.parseFromString(res, 'text/html');

        eventSelectContainer.replaceChild(doc.getElementById(id), eventSelect);
    });
}

function changeWebinair() {
    /**
     * Requête ajax
     */
    var form = document.querySelector('form');

    // Création de l'objet data
    var data = new FormData();
    data.append(this.name, this.value);
    var id = this.getAttribute("id");
    id = id.replace('_webinair','_webinairDate');

    // On envoie une requête ajax POST
    ajaxPost(form.action, data, function (res) {

        var eventSelect          = document.getElementById(id);
        var eventSelectContainer = document.getElementById(id).parentElement;

        // On parse la réponse en DOM HTML
        var parser = new DOMParser();
        var doc = parser.parseFromString(res, 'text/html');
        eventSelectContainer.replaceChild(doc.getElementById(id), eventSelect);
    });
}

//Change Reduction Value Type
function changeDiscountType() {
    /**
     * Requête ajax
     */
    var form = document.querySelector('form');
    var data = new FormData();
    var type = document.querySelector('input[name="discount[type]"]:checked');
    data.append(type.name, type.value);
    // On envoie une requête ajax POST
    ajaxPost(form.action, data, function (res) {
        var input          = document.getElementById('discount_value').parentElement;
        // On parse la réponse en DOM HTML
        var parser = new DOMParser();
        var doc = parser.parseFromString(res, 'text/html');
        input.parentElement.replaceChild(doc.getElementById('discount_value').parentElement, input);
    });
}