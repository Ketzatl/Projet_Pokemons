<div class="container">
    <div class="row">
        <?php if($this->logged){ ?>
            <div class="col-2 text-center">
                <?php if(isset($pref)){ ?>
                    <h3 class="text-center text-light"> <?= $pref->pok_name ?> </h3>
                    <img class="img-fluid " src="<?= $pref->pok_img_url ?>" alt="">
                <?php } else { ?>
                    <a class="btn btn-info" href="<?php echo site_url("profil/pokemon/favoris") ?>">Définir son pokémon préféré</a>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="<?php echo ($this->logged) ? "col-10" : "col-12" ?> ">
            <table class="table table-hover table-dark text-center">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Fiche</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pokemons as $pokemon) { ?>
                    <tr>
                        <th><?= $pokemon->id ?></th>
                        <td><img class="img-fluid" style="height: 50px" src="<?= $pokemon->pok_img_url ?>" alt=""></td>
                        <td><?= htmlspecialchars($pokemon->pok_name) ?></td>
                        <td><a class="btn btn-gold" href=<?= base_url('pokemon/') . $pokemon->id ?>><i class="fa fa-eye"></i></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>