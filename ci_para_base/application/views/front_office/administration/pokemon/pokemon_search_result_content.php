<div class="row justify-content-center">

    <?php foreach ($pokemons as $pokemon) { ?>

        <div class="card col-3 m-3 text-center text-light bg-dark " style="height: 35vh;">
            <div class="container">
                <div class="card-header">
                    <p class="card-text title-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?>"> <?= '#' . htmlspecialchars($pokemon->id) . ' - ' . htmlspecialchars($pokemon->pok_name) ?> </p>
                </div>

                <div class="card-img my-3">
                    <img class="img-fluid img-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?>" src="<?= htmlspecialchars($pokemon->pok_img_url) ?>" alt="<?= 'Image ' . htmlspecialchars($pokemon->pok_name) ?>" style="height: 12vh">
                </div>

                <div class="card-footer">
                    <button type="button" class="btn-edit-pokemon update-pokemon_<?= htmlspecialchars($pokemon->id) ?> btn btn-gold" data-id="<?= htmlspecialchars($pokemon->id) ?>">
                        <?= 'Modifier ' . htmlspecialchars($pokemon->pok_name) ?>
                    </button>
                </div>
            </div>
        </div>

    <?php } ?>

</div>
