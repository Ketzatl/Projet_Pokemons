$('button.btn-action-vote-favoris').on('click', function () {
    var pokemon = $(this).attr('data-pokemon');


    var url = site_url + 'profil/pokemon/vote';

    $.ajax({
        url : url,
        type: 'POST',
        data : {pokemon:pokemon},
        success : function (data) {

            if (data.error) {
                Swal.fire({
                    position : 'center',
                    icon : 'error',
                    title : data.error,
                    showConfirmButton : false,
                    timer : 1500
                });
            } else {
                Swal.fire({
                    position : 'center',
                    icon : 'success',
                    title : 'Votre pokémon préféré a été défini',
                    showConfirmButton : false,
                    timer : 1500
                });
                // Là ou il y a le bg-red, on enlève le bg red et on rend le bouton à nouveau clickable
                $(".bg-red .btn-action-vote-favoris").prop("disabled", false);
                $(".bg-red").removeClass("bg-red");

                $("#div-pokemon-"+pokemon).addClass("bg-red");
                $("#div-pokemon-"+pokemon+" .btn-action-vote-favoris").prop('disabled', true);
            }

        }
    });
});