<div class="container">

        <form id="form-search-pokemon" class="w-50 m-auto">

            <a class="btn btn-success btn-lg mb-3 btn-block" href="<?php echo site_url('administration/pokemon/add') ?>"><i class="fa fa-plus mr-1"></i>Ajouter</a>

            <div class="input-group">
                <button class="btn btn-gold btn-edit-search-cancel" type="button" style="display: none">
                    <i class="fa fa-times"></i>
                </button>
                <label for="editSearch"></label>
                <input type="text" class="form-control" name="editSearch" id="editSearch" placeholder="Rechercher un pokémon">
                <div class="input-group-append">
                    <button class="btn btn-gold btn-edit-search" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>

            <div class="row text-light justify-content-center">
                <p class="field-error" data-field="editSearch" style="display: none"></p>
            </div>


        </form>

    <div class="search-none">


        <div class="row justify-content-center">

            <?php foreach ($pokemons as $pokemon) { ?>

            <div class="card col-3 m-3 text-center text-light bg-dark p-0">
                <div class="">
                    <div class="card-header">
                        <p class="card-text title-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?>"> <?= '#' . htmlspecialchars($pokemon->id) . ' - ' . htmlspecialchars($pokemon->pok_name) ?> </p>
                    </div>

                    <div class="card-img my-3">
                        <img class="img-fluid img-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?>" src="<?= htmlspecialchars($pokemon->pok_img_url) ?>" alt="<?= 'Image ' . htmlspecialchars($pokemon->pok_name) ?>" style="height: 12vh">
                    </div>

                    <div class="card-footer">
                        <button type="button" class="btn-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?> btn btn-gold" data-id="<?= htmlspecialchars($pokemon->id) ?>">
                            <?= '<i class="fa fa-cog"></i> ' . htmlspecialchars($pokemon->pok_name) ?>
                        </button>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>

    <div class="search-true" style="display: none">


    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="modal-pokemon-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

                <div class="modal-header bg-dark border-0">
                    <h3 class="modal-title text-light" id="exampleModalLabel">Modifier le pokémon</h3>
                </div>

                <form class="form-edit-pokemon">

                    <div class="modal-body bg-dark border-0">

                        <!-- Contenu de la modal -->

                    </div>

                    <div class="modal-footer bg-dark border-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger btn-edit-pokemon-confirm">Enregistrer</button>
                    </div>

                </form>

        </div>
    </div>
</div>