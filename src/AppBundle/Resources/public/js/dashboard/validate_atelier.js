/**
 *
 * Vérification de validité du formulaire
 */
var form = document.querySelector('form');
form.addEventListener('submit', function (e) {

    var inputs = document.querySelectorAll('input');
    for (var i = 0; i < inputs.length; i++)
    {
        if (inputs[i].required && inputs[i].value === "")
        {
            e.preventDefault();
            var div = document.createElement('div');
            div.setAttribute('class', 'alert alert-danger required-champs');

            var btn = document.createElement('button');
            btn.type = 'button';
            btn.classList.add('close');
            btn.setAttribute('data-dismiss', 'alert');
            btn.setAttribute('aria-hidden', 'true');
            btn.innerText = '×';

            var span = document.createElement('span');
            span.innerHTML = '<strong>Attention !</strong> Des champs obligatoires ne sont pas remplis.';

            div.appendChild(btn);
            div.appendChild(span);

            if (!document.querySelector('.required-champs')) {
                document.getElementById('errors').appendChild(div);
            }

        } else {
            document.querySelector('body').classList.add('loading-overlay-showing');
            document.querySelector('body').setAttribute('data-loading-overlay', '');
            $('body').prepend('<span class="loading-overlay dark" style="opacity: 0.5;"><span class="loader white"></span></span>');
            return true;
        }
    }
});