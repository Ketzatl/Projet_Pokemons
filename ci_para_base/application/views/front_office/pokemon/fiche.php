<?php

if ($pokemon->id === '1') {
    $btnLast = 'disabled';
} else {
    $btnLast = '';
}
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-grey-dark-plus">
                    <h5 class="card-title text-center text-gold">Image</h5>
                </div>
                <img class="card-img-bottom img-pokemon" src="<?= $pokemon->pok_img_url?>" alt="Card image cap">
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-grey-dark-plus">
                    <h5 class="card-title text-center text-gold">Statistiques</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Type
                            <img class="poke-type" src="<?php echo base_url("assets/images/types/type_".$pokemon->pok_type.".png") ?>" alt="">
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            HP
                            <span class="badge badge-primary badge-pill poke-hp"><?= $pokemon->pok_hp ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Poids
                            <span class="badge badge-primary badge-pill poke-weight"><?= $pokemon->pok_weight.' kg' ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Taille en m
                            <span class="badge badge-primary badge-pill poke-height"><?= $pokemon->pok_height.' m'?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            point d'attaque
                            <span class="badge badge-primary badge-pill poke-height"><?= $pokemon->pok_atk ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            point defense
                            <span class="badge badge-primary badge-pill poke-height"><?= $pokemon->pok_def ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-header bg-grey-dark-plus">
                    <h5 class="card-title text-center text-gold">Description</h5>
                </div>
                <div class="card-body">
                    <p class="poke-description"><?= $pokemon->pok_description?></p>
                </div>
            </div>
            <a href="<?= site_url('pokemon/') .($pokemon->id + 1) ?>" class="btn btn-gold btn-lg mt-2 float-right btn-next-pokemon">Suivant</a>
            <a href="<?= base_url('pokemon/') .($pokemon->id - 1) ?>" class="btn btn-gold btn-lg mt-2 float-right btn-last-pokemon <?= $btnLast ?>">Précédent</a>
        </div>
    </div>
</div>
