<?php foreach ($evenements as $evenement) { ?>
    <div class="card mb-5 container  p-0" style="width: 35rem;">
        <img class="card-img-top" src=<?= $evenement->image ?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <tr>
                    <td><?= $evenement->titre ?></td>
                </tr>
            </h5>
            <p class="card-text"><?=$evenement->contenu ?></p>
            <a class="btn btn-gold float-right" href=<?= base_url('evenement/') . $evenement->id ?>>En savoir plus</a>
        </div>
    </div>
<?php } ?>
