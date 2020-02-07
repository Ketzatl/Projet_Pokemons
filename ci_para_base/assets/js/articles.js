$('button.btn-createArticle').on('click', function () {


    var formData = $('form.form-article').serialize();
    var url = site_url + 'administration/article/add/1';
    var elementSelected = $('p.field-error');

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
            if (data.error) {

                /*
                $('form.form-article').find('[data-field]').each(function () {
                    $(this).html("");
                });

                 */

                elementSelected.each(function () {
                    $(this).html('');
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
                    title : 'Votre article a été créé avec succès, vous allez être redirigé...',
                    showConfirmButton : false,
                    timer : 1500
                });
                setTimeout(function(){
                    window.location.href = site_url + "administration/article";
                }, 1500);

            }
        }
    });

    //console.log(formData);

});

$('button.btn-updateArticle').on('click', function () {

    var formData = $('form.form-article').serialize();
    var url = site_url + 'administration/article/edit';
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
                    title : 'Votre article a été modifié avec succès, vous allez être redirigé...',
                    showConfirmButton : false,
                    timer : 1500
                });
                setTimeout(function(){
                    window.location.href = site_url + "administration/article";
                }, 1500);




            }
        }
    });




    //console.log(formData);

});

