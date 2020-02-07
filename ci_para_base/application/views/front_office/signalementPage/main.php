<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-dark text-center">
                <thead>
                <tr>
                    <th>Article</th>
                    <th>Raison</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($signalement as $signal) { ?>
                    <tr>
                        <th><?= $signal->evenement_id ?></th>
                        <td><?= $signal->sig_raison ?></td>
                        <td><?= $signal->sig_description ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

