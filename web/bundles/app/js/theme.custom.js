// FONCTION POST REQUETE AJAX
function ajaxPost(url, data, callback) {
    var req = new XMLHttpRequest();
    req.open("POST", url);
    req.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            callback(req.response);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(data);
}

function updateNbChars(el, limit) {
    element = document.getElementById(el);
    element.addEventListener('keyup', function () {
        countChars = this.nextSibling.nextSibling.querySelector('.countChars');
        chars = this.value.length;
        restant = limit - chars;
        if (chars >= limit) {
            restant = 0;
            countChars.style.color = "#a94442";
        } else {
            countChars.style.color = "#4CAF50";
        }
        countChars.innerText = " (" + restant + " caractères restants)";
    });
}

function getNbChars(el, limit) {
    element = document.getElementById(el);
    countChars = element.nextSibling.nextSibling.querySelector('.countChars');
    chars = element.value.length;
    restant = limit - chars;
    if (chars >= limit) {
        restant = 0;
        countChars.style.color = "#a94442";
    } else {
        countChars.style.color = "#4CAF50";
    }
    countChars.innerText = " (" + restant + " caractères restants)";
}

