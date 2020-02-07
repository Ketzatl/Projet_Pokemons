$(document).on('click', 'button.btn-edit-pokemon', function () {

    var url = site_url + 'administration/pokemon/getViewEdit';
    var pokemon = $(this).attr('data-id');

    $.ajax({
        url : url,
        type : 'POST',
        data : { pokemon:pokemon },
        success : function (data) {
            if (data.error) {

                Swal.fire({
                    position : 'center',
                    icon : 'error',
                    title : 'Un problème est survenu',
                    showConfirmButton : false
                });

            } else {

                $('#modal-pokemon-edit .modal-body').html(data.view);
                // On espace #modal-pokemon-edit et .modal-body car ce n'est pas le classe directement après l'id indiqué
                $('#modal-pokemon-edit').modal("show");

            }
        }
    });


});

$(document).on('click', 'button.btn-edit-pokemon-confirm', function() {

    var formData = $('form.form-edit-pokemon').serialize();
    var url = site_url + 'administration/pokemon/edit';
    var elementSelected = $('p.field-error');

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
            if (data.error) {

                elementSelected.each(function () {
                    for (var key in data.error) {
                        if ($(this).attr('data-field') === key) {
                            $(this).attr('style', 'visibility : visible');
                            $(this).html(data.error[key]);
                        }
                    }
                })

            } else {


                Swal.fire({
                    position : 'center',
                    icon : 'success',
                    title : 'Votre modification a été pris en compte',
                    showConfirmButton : false,
                    timer : 1500
                });


                // On récupere dans un tableau json les valeurs modifiées
                var pokID = data.editID;
                var pokName = data.editName;
                var pokIMG = data.editIMG;


                // On remplace les textes des trois élements dans les cards avec les valeurs reçues
                $('p.update-pokemon_' + pokID).html('#' + pokID + ' - ' + pokName);
                $('img.update-pokemon_' + pokID).attr('src', pokIMG);
                $('img.update-pokemon_' + pokID).attr('alt', 'Image de ' + pokName);
                $('button.update-pokemon_' + pokID).html('Modifier ' + pokName);

                $('#modal-pokemon-edit').modal('hide');

            }
        }
    });
});

$(document).on('submit', '#form-search-pokemon', function(e) {
    //Permet de désactiver toutes les actions par défaut du comportement html (ici un bouton submit doit recharger la page. Ici on empêche ce rechargement)
    e.preventDefault();
    var formData = $(this).serialize();
    var url = site_url + 'administration/pokemon/getSearchEdit';
    var elementSelected = $('p.field-error');

    $.ajax({

        url : url,
        type : 'POST',
        data : formData,
        success : function(data) {

            if (data.error) {

                elementSelected.each(function () {
                    for (var key in data.error) {
                        if ($(this).attr('data-field') === key) {
                            $(this).attr('style', 'visibility : visible');
                            $(this).html(data.error[key]);
                        }
                    }
                })

            } else {

                $('p.field-error').hide();
                $('div.search-true').show().html(data.view);
                $('button.btn-edit-search-cancel').show();
                $('div.search-none').hide();

            }

        }

    })

});


$('button.btn-edit-search-cancel').on('click', function() {

    $('div.search-true').hide();
    $('button.btn-edit-search-cancel').hide();
    $('div.search-none').show();
    $('#editSearch').val("");

});

$(document).on('submit', "#form-pokemon-add", function (e) {

    e.preventDefault();
    var formData = $(this).serialize();
    var url = site_url + 'administration/pokemon/add/1';
    var elementSelected = $('p.field-error');

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
            if (data.error) {

                elementSelected.each(function () {
                    $(this).html('');
                    for (var key in data.error) {
                        if ($(this).attr('data-field') === key) {
                            $(this).html(data.error[key]);
                        }
                    }
                })

            } else {


                Swal.fire({
                    position : 'center',
                    icon : 'success',
                    title : 'Votre pokemon a été créé avec succès',
                    showConfirmButton : false,
                    timer : 1500
                });


                setTimeout(function(){
                    window.location.href = site_url + "pokemon/" + data.id_pokemon;
                }, 1500);

            }
        }
    });

    console.log(formData);

});