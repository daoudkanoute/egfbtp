function changeTargetType() {
    /**
     * Requête ajax
     */
    var form = document.querySelector('form');
    var data = new FormData();
    var type = document.querySelector('input[name="discussion[type]"]:checked');
    data.append(type.name, type.value);
    // On envoie une requête ajax POST
    ajaxPost(form.action, data, function (res) {
        var target          = document.getElementById('target');
        // On parse la réponse en DOM HTML
        var parser = new DOMParser();
        var doc = parser.parseFromString(res, 'text/html');
        target.innerHTML = doc.getElementById('target').innerHTML;
        $('#inputAtelier , #inputTuto , #inputWebinair').on('change', changeUsersType);
    });
}

function changeUsersType() {
    var inputAtelier = document.getElementById('inputAtelier');
    var inputTutos = document.getElementById('inputTuto');
    var inputWebinair = document.getElementById('inputWebinair');
    // On envoie une requête ajax POST
    var _data = {};
    if(inputAtelier) { _data = {'atelier': inputAtelier.value}; }
    if(inputTutos) { _data = {'tuto': inputTutos.value}; }
    if(inputWebinair) { _data = {'webinair': inputWebinair.value}; }
    $.ajax({
        type: "POST",
        data: _data,
        dataType: 'json',
        success: function (users) {
            var output = $('#inputUsers');
            var container = $('#users_container');
            if(users.length) {
                output.find('option').remove();
                $.each( users, function( id, user ) {
                    output.append( "<option value='"+user.id+"'>"+user.name+"</option>" );
                });
                output.removeClass('hidden');
                container.find('.alert').addClass('hidden')

            } else {
                output.addClass('hidden');
                container.find('.alert').removeClass('hidden')
            }
        }
    });
}