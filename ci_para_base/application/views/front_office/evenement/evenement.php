<div class="card mb-3 page">
    <img class="card-img-top" src=<?= $evenement->image ?> alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?= $evenement->titre ?></h5>
        <p class="card-text"><?= $evenement->contenu?></p>
        <p class="card-text"><small class="text-muted"><?=$evenement->created_at ?></small></p>

    </div>
</div>

<button id="btn-show-form-signalement" class="btn btn-gold float-right link switch signal" ><i class="fa fa-exclamation-triangle"></i> Signaler</button>

<form id="form-signalement" class="display-none">
    <input type="hidden" name="id" value="<?= $evenement->id ?>">
    <div>
        <div class="container">
            <div class="signalement ">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="Raison">Raison</span>
                    </div>
                    <input name="raison" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <p class="field-error mb-3" data-field="raison"></p>

                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="Description ">Description</span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                </div>
                <p class="field-error mb-3" data-field="description"></p>

            </div>
        </div>
    </div>
    <button class="btn btn-success float-right" type="submit"><i class="fa fa-check"></i> Envoyer</button>
</form>


