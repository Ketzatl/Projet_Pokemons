<div class="row">
    <div class="col-12 ml-1">
        <div class="table-responsive">
        <table class="table table-hover table-grey-dark-plus">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Email</th>
                <th scope="col">Créé le</th>
                <th scope="col">Màj</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr id="div-user-<?php echo $user->id ?>" style="font-size: 18px;">
                    <th scope="row"><?= $user->id ?></th>
                    <td class="align-middle"><?= $user->use_pseudo ?></td>
                    <td class="align-middle"><?= $user->use_email ?></td>
                    <td class="align-middle"><?= $user->created_at ?></td>
                    <td class="align-middle"><?= $user->updated_at ?></td>
                    <td class="align-middle">
                        <!--<a class="btn btn-dark modify_user" data-user="$user->id" href=""><i class="fas fa-user-cog"></i></a>-->
                        <!--<a class="btn btn-dark delete_user" href=""><i class="far fa-trash-alt"></i></a>-->
                        <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-dark btn-show-user-edit" data-user="<?php echo $user->id; ?>">
                                <i class="fas fa-user-cog"></i>
                            </button>

                            <button type="button" class="btn btn-dark btn-show-user-delete" data-user="<?php echo $user->id; ?>">
                                <i class="far fa-trash-alt"></i>
                            </button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-user-edit">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>
<div class="modal fade" id="modal-user-delete">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>



