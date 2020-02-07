<form id="form-user-delete" action="#">
    <input type="hidden" name="id" class="form-control" value="<?= $user->id ?>" placeholder="pseudo">
    <div class="modal-header">
        <h4 class="modal-title">Etes vous sur de supprimer le profil ?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        Les informations de <label class="font-weight-bold"><?= $user->use_pseudo ?></label> seront perdues.
    </div>
    <button type="submit" class="btn btn-danger w-100 my-4" >Supprimer</button>

    <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
    </div>
</form>
