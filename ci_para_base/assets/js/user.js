//EDIT MODAL
$('button.btn-show-user-edit').on('click', function () {

    var user = $(this).attr('data-user');

    $.ajax({
        url: site_url + "administration/user/viewedit",
        type: 'POST',
        data: {user_id:user},
        success: function (data) {
            if (data.error) {
                Swal.fire({
                    position : 'center',
                    icon : 'error',
                    title : 'Une erreur est survenue !',
                    showConfirmButton : false,
                    timer : 1500,
                });
            } else {
                $('#modal-user-edit .modal-content').html(data.view);
                $('#modal-user-edit').modal('show');
            }
        }
    });
});
//EDIT MODIF
$(document).on('submit', '#form-user-edit', function (e) {
    e.preventDefault();
    var formData = $('form#form-user-edit').serialize();
    var url = site_url + 'administration/user/edit';

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {

            if (data.error) {

                $('#form-user-edit p.field-error').each(function () {
                    $(this).text("");
                    for (var key in data.error) {
                        if ($(this).attr('data-field') === key) { //boucle de batard
                            $(this).html(data.error[key]);
                        }
                    }
                })
            } else {
                $('#modal-user-edit').modal('hide');
                Swal.fire({
                    position : 'center',
                    icon : 'success',
                    title : "L'utilisateur a été modifié",
                    showConfirmButton : false,
                    timer : 1500,
                });
                setTimeout(function(){
                    //document.location.href = site_url + "administration/user"
                }, 1500);
            }


        }
    });
});
//DELETE MODAL
$('button.btn-show-user-delete').on('click', function () {

    var user = $(this).attr('data-user');

    $.ajax({
        url: site_url + "administration/user/viewdelete",
        type: 'POST',
        data: {user_id:user},
        success: function (data) {
            if (data.error) {
                Swal.fire({
                    position : 'center',
                    icon : 'error',
                    title : 'Une erreur est survenue !',
                    showConfirmButton : false,
                    timer : 1500,
                });
            } else {
                $('#modal-user-delete .modal-content').html(data.view);
                $('#modal-user-delete').modal('show');
            }
        }
    });
});
//DELETE MODIF
$(document).on('submit', '#form-user-delete', function (e) {
    e.preventDefault();
    var formData = $('form#form-user-delete');
    var url = site_url + 'administration/user/delete';

    $.ajax({
        url : url,
        type : 'POST',
        data : formData,
        success : function (data) {
            if (data.error) {
                elementSelected.each(function () {
                    for (var key in data.error) {
                        if ($(this).attr('data-field') === key) { //boucle de batard
                            $(this).html(data.error[key]);
                        }
                    }
                })
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Compte supprimé avec succès !',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#modal-user-delete').modal('hide');
                $('#div-user-'+data.user_to_delete).remove();
            }

            //location.reload();
        }
    });
});