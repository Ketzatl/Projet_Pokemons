 <div class="container">

             <div class="input-group mb-3 col-8 mx-auto my-3">

                 <div class="input-group-prepend">
                     <label class="input-group-text bg-gold text-dark border-0" for="editID"> ID </label>
                 </div>
                 <input type="text" class="form-control" name="editID" id="editID" value="<?= htmlspecialchars($selected_pokemon->id) ?>" readonly>

             </div>

             <div class="row text-light justify-content-center">
                 <p class="field-error" data-field="editID" style="display: none"></p>
             </div>


            <div class="input-group mb-3 col-8 mx-auto my-3">

                <div class="input-group-prepend">
                    <label class="input-group-text bg-gold text-dark border-0" for="editName">Nom</label>
                </div>
                <input type="text" class="form-control" name="editName" id="editName" value="<?= htmlspecialchars($selected_pokemon->pok_name) ?>">


            </div>

             <div class="row text-light justify-content-center">
                    <p class="field-error" data-field="editName" style="display: none"></p>
             </div>

            <div class="input-group mt-3 col-8 mx-auto my-3">

                <div class="input-group-prepend">
                    <label class="input-group-text bg-gold text-dark border-0" for="editIMG">Image</label>
                </div>
                <input type="text" class="form-control" name="editIMG" id="editIMG" value="<?= htmlspecialchars($selected_pokemon->pok_img_url) ?>">

            </div>

             <div class="row text-light justify-content-center">
                 <p class="field-error" data-field="editIMG" style="display: none"></p>
             </div>

            <div class="input-group mt-3 col-8 mx-auto my-3">

                <div class="input-group-prepend">

                    <label class="input-group-text bg-gold text-dark border-0" for="editType">Type</label>
                    <div class="input-group editType">

                        <select name="editType" id="editType" class="form-control">

                            <?php
                            foreach ($types as $type){
                                if($type->id === $selected_pokemon->pok_type){ ?>
                                    <option selected value="<?= htmlspecialchars($type->id) ?>"> <?= htmlspecialchars($type->typ_name) ?> </option>
                                <?php } else { ?>
                                    <option value="<?= htmlspecialchars($type->id)?>"> <?= htmlspecialchars($type->typ_name) ?> </option>
                                <?php } ?>
                            <?php } ?>

                        </select>
                    </div>
                </div>

            </div>

             <div class="row text-light justify-content-center">
                 <p class="field-error" data-field="editType" style="display: none"></p>
             </div>

            <div class="input-group mt-3 col-8 mx-auto my-3">

                <div class="input-group-prepend">
                    <label class="input-group-text bg-gold text-dark border-0" for="editDesc">Description</label>
                </div>
                <textarea type="text" class="form-control" name="editDesc" id="editDesc" rows="3" style="resize: none"> <?= htmlspecialchars($selected_pokemon->pok_description) ?> </textarea>

            </div>

             <div class="row text-light justify-content-center">
                 <p class="field-error" data-field="editDesc" style="display: none"></p>
             </div>

            <div class="row justify-content-center">

                <div class="input-group mt-3 col-2 mx-1 my-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text bg-gold text-dark border-0" for="editHeight">Taille</label>
                    </div>
                    <input type="text" class="form-control" name="editHeight" id="editHeight" value="<?= htmlspecialchars($selected_pokemon->pok_height) ?>">
                </div>

                <div class="input-group mt-3 col-2 mx-1 my-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text bg-gold text-dark border-0" for="editWeight">Poids</label>
                    </div>
                    <input type="text" class="form-control" name="editWeight" id="editWeight" value="<?= htmlspecialchars($selected_pokemon->pok_weight) ?>">
                </div>

                <div class="input-group mt-3 col-2 mx-1 my-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text bg-gold text-dark border-0" for="editHP">HP</label>
                    </div>
                    <input type="text" class="form-control" name="editHP" id="editHP" value="<?= htmlspecialchars($selected_pokemon->pok_hp) ?>">
                </div>

            </div>


     <div class="row justify-content-center text-light text-center">

         <div class="input-group mt-3 col-2 mx-1 my-3">

             <p class="field-error" data-field="editHeight" style="display: none"></p>

         </div>

         <div class="input-group mt-3 col-2 mx-1 my-3">

             <p class="field-error" data-field="editWeight" style="display: none"></p>

         </div>

         <div class="input-group mt-3 col-2 mx-1 my-3">

             <p class="field-error" data-field="editHP" style="display: none"></p>

        </div>

     </div>
</div>

