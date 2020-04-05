//Dateiname: core2.js

/* Das alleine reicht irgendwie nicht
var registrierenButton = $('#btn btn-lg btn-primary btn-block');

registrierenButton.find('.btn btn-lg btn-primary btn-clock').click(function () {
    registrierenButton.find('form').trigger('submit', [this]);
});
 */

/*  there are other libraries that could use "$" - so it is 100% save to use "jQuery" instead of "$"
    if you don't use any other libraries than jQuery you could still go with "$"
    so the following line would be
    $(document).ready(function() { */

jQuery(document).ready(function() {

    var editButton = $('#editButton'); //Änderung editButton

    editButton.on('show.bs.modal', function (event) { //stimmt das so? ohne Veränderung außer editButton

        var button = $(event.relatedTarget) // Button that triggered the modal
        var addressId = button.data('id') // Extract info from data-* attributes

        var that = this;


        var theTitle = "Neue Adresse anlegen";
        var thePrimaryButton = "Registrieren"; //Änderung Hinzufügen
        var apiRequestUrl = "api/address/?returnView=true";

        if(typeof addressId !== "undefined")
        {
            editButton.find('.id').html(addressId); //Änderung editButton
            theTitle = "Adresse mit der ID " + addressId + " bearbeiten";
            thePrimaryButton = "Speichern";

            apiRequestUrl = apiRequestUrl + "&id=" + addressId;
        }

        //this is to give the title and the "save" button different labels if they clicked on edit or new
        editButton.find('.modal-title').html(theTitle); //Änderung editModal
        editButton.find('.btn btn-lg btn-primary btn-clock').html(thePrimaryButton); //Änderung editModal & .btn-primary

        //before we have a formular loaded via ajax - we don't want them to be able to click on "save"
        //therefore we disable the button
        editButton.find('.btn btn-lg btn-primary btn-clock').prop('disabled', true); //Änderung editModal & .btn-primary

        jQuery.ajax({
            'url': apiRequestUrl,
            'method': 'get',
            'success': function(receivedData) {

                if(receivedData.result) {
                    var modal = $(that)
                    modal.find('.input-group').html(receivedData.data.html); //alt: .modal-body
                    editBuddon.find('.btn btn-lg btn-primary btn-clock').prop('disabled', false); //alt: .btn-primary
                } else { //there was an error - do something!
                    console.log('Fehler core2.js Zeile 59');
                }
            }
        });



    });

    //Hinzufügen Event oder --> neue Funktion sieh bisschen weiter unten?
    editModal.find('.btn-primary').click(function() {
        editModal.find('form').trigger('submit', [this]);
    });


    //wie heißt unser registrieren button? die class brauchen wir
    //<button class="btn btn-lg btn-primary btn-block" type="submit">Registrieren</button>

    // wir müssen die datei, wo button gespeichert ist mit java script irgendwie verbinden
    //datei heißt: new-user.html

    //die funktion von oben umschreiben
    editButton.find('.btn btn-lg btn-primary btn-block.find').click(function () {
        editButton.find('form').trigger('submit', [this]); //woher kommen form und woher kommt submit
    })


    //wenns funktioniert super

    //funktioniert es nicht, langsam von oben herunter alles anpassen



    $('.triggerDelete').click(function(e) {
        e.preventDefault();

        var r = confirm("Wollen Sie die Adresse wirklich löschen?");
        if (r == true) {
            var dataToSend = {'id':$(this).attr('data-id')};
            $.ajax({
                'url': $(this).attr('href'),
                'method': 'delete',
                'data': dataToSend,
                'dataType': "json",
                'success': function (receivedData) {
                    if(receivedData.result) {
                        window.setTimeout(function() {
                            location.reload();
                        }, 500);
                    } else {
                        //@TODO display error message
                    }
                }
            });
        }
    });

});
