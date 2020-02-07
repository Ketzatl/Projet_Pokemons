// Quand on clique sur le bouton "Signaler" => Affiche le formulaire
$(document).on('click', '#btn-show-form-signalement:not(.active)', function (e) {
    // On affiche le formulaire (initialement en display-none, on l'affiche grâce à slideDown ou fadeIn ou show
    $('#form-signalement').slideDown();
    // On ajoute la classe "active"
    $(this).addClass('active');
    // On remplace le contenu du bouton
    $(this).html('<i class="fa fa-times"></i> Fermer');
});

// Quand on clique sur le bouton "Signaler" => Affiche le formulaire
$(document).on('click', '#btn-show-form-signalement.active', function (e) {
    // On masque le formulaire (on l'affiche grâce à slideUp ou fadeOut ou hide
    $('#form-signalement').slideUp();
    // On supprime la classe "active"
    $(this).removeClass('active');
    // On remplace le contenu du bouton
    $(this).html('<i class="fa fa-exclamation-triangle"></i> Signaler');
});


// onSubmit Formulaire Signalement
$(document).on('submit', '#form-signalement', function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    var url = site_url + 'evenement/signalement';

    $.ajax({
        url : url,
        type: 'POST',
        data : formData,
        success : function (data) {

            if (data.error) {

                $("#form-signalement p.field-error").each(function () {
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
                    title : 'Votre signalement a été pris en compte',
                    showConfirmButton : false,
                    timer : 1500
                });

                // On vide les champs du formulaire avec ce tips de ouf
                $('#form-signalement')[0].reset();
                // On masque le formulaire et pour ça on utilise l'action du clique sur le bouton Fermer
                $('#btn-show-form-signalement.active').click();

            }

        }
    })


});