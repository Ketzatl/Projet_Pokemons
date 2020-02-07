var clicks = 0;

$('a.switch').on('click', function () {
    if (clicks === 0) {
        $('div.login').hide();
        $('a.switch').text('Se Connecter');
        $('div.register').show();
        clicks++;
    } else {
        $('div.login').show();
        $('a.switch').text('S\'inscrire');
        $('div.register').hide();
        clicks--;
    }
});

$(document).on('submit', '#form-signup', function (e) {
    //Permet de désactiver toutes les actions par défaut du comportement html (ici un bouton submit doit recharger la page. Ici on empêche ce rechargement)
    e.preventDefault();
    var formData = $(this).serialize();
    var url = site_url + 'register/attempt';
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
                            $(this).html(data.error[key]);
                        }
                   }
               })

           } else {

               //console.log(data.success);

               Swal.fire({
                   position : 'center',
                   icon : 'success',
                   title : 'Bienvenue ! Vous allez être redirigé...',
                   showConfirmButton : false,
                   timer : 1500
               });
               setTimeout(function(){
                   window.location.href = site_url + 'pokemon';
               }, 1500);



           }
        }
    });

});


$(document).on('submit', '#form-signin', function (e) {
    //Permet de désactiver toutes les actions par défaut du comportement html (ici un bouton submit doit recharger la page. Ici on empêche ce rechargement)
    e.preventDefault();
    var pseudo = $('#loginPseudo').val();
    var password = $('#loginPassword').val();

    if(pseudo && password) {

        var formData = $(this).serialize();
        var url = site_url + 'login/attempt';

        $.ajax({
            url : url,
            type: 'POST',
            data : formData,
            success : function (data) {

                if (data.error) {



                    $('p.field-error').each(function () {
                        $(this).text("");
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
                        title : 'Bienvenue ! Vous allez être redirigé...',
                        showConfirmButton : false,
                        timer : 1500
                    });
                    setTimeout(function(){
                        window.location.href = site_url + 'pokemon';
                    }, 1500);


                }

            }
        });

    }
});

