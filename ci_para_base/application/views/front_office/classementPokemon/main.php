
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-dark text-center">
                <thead>
                <tr>
                    <th >#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pokemons as $pokemon) { ?>
                    <tr id="div-pokemon-<?php echo $pokemon->id; ?>" class="<?php if ($this->appli_user->pok_pref == $pokemon->id){
                        echo 'bg-red';
                    } ?>">
                        <th><?= $pokemon->id ?></th>
                        <td><img class="img-fluid" style="height: 50px" src="<?php echo $pokemon->pok_img_url ?>" alt=""></td>
                        <td><?= $pokemon->pok_name ?></td>
                        <td class="text-center">
                            <?php if ($this->appli_user->pok_pref != $pokemon->id){ ?>
                                <button class="btn btn-gold btn-block btn-action-vote-favoris" data-pokemon="<?= $pokemon->id ?>"><i class="fa fa-thumbs-up"></i> C'est mon préféré ! <i class="fa fa-thumbs-up"></i></button>
                            <?php } else { ?>
                                <button class="btn btn-gold btn-block btn-action-vote-favoris" disabled data-pokemon="<?= $pokemon->id ?>"><i class="fa fa-thumbs-up"></i> C'est mon préféré ! <i class="fa fa-thumbs-up"></i></button>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>