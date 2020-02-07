<form id="form-user-edit" action="#">
    <input type="hidden" name="id" class="form-control" value="<?= $user->id ?>" placeholder="pseudo">
    <div class="modal-header">
        <h4 class="modal-title">Modification du profil <?= $user->use_pseudo ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group m-0">
            <label for="pseudo_edit">changement de pseudo :</label>
            <input type="text" class="form-control" name="pseudo_edit" value="<?= $user->use_pseudo ?>" placeholder="pseudo">
        </div>
        <p class="field-error text-dark mb-2" data-field="pseudo_edit"></p>

        <div class="form-group m-0">
            <label for="email_edit">changement d'email :</label>
            <input type="email" class="form-control" name="email_edit" value="<?= $user->use_email ?>" placeholder="email">
        </div>
        <p class="field-error text-dark mb-2" data-field="email_edit"></p>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success save-edit" ><i class="fa fa-check mr-1"></i>Enregistrer</button>
    </div>
</form>