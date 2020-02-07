
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form id="form-pokemon-add">
                <img class="mb-4 img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png" alt="">
                <div class="form-group">

                    <label for="pokemonNom" class="sr-only">Nom du Pokemon</label>
                    <input type="text" id="pokemonNom" name="pokemonNom" class="form-control mb-2" placeholder="Nom du Pokemon" required autofocus>
                    <p class="field-error" data-field="pokemonNom"></p>

                    <label for="pokemonHp" class="sr-only">HP du Pokemon</label>
                    <input type="number" id="pokemonHp" min="10" max="500" name="pokemonHp" class="form-control mb-2" placeholder="HP du Pokemon" required autofocus>
                    <p class="field-error" data-field="pokemonHp"></p>

                    <label for="pokemonHeight" class="sr-only">Taille du Pokemon</label>
                    <input type="number" id="pokemonHeight" min="1" max="20" name="pokemonHeight" class="form-control mb-2" placeholder="Taille du Pokemon" required>
                    <p class="field-error" data-field="pokemonHeight"></p>

                    <label for="pokemonWeight" class="sr-only">Poids du Pokemon</label>
                    <input type="number" id="pokemonWeight" min="1" max="320" name="pokemonWeight" class="form-control" placeholder="Poids du Pokemon" required>
                    <p class="field-error" data-field="pokemonWeight"></p>

                    <label for="pokemonAtk" class="sr-only">Points d'Attaque du Pokemon</label>
                    <input type="number" id="pokemonAtk" min="10" max="255" name="pokemonAtk" class="form-control mb-2" placeholder="Points d'Attaque du Pokemon" required autofocus>
                    <p class="field-error" data-field="pokemonAtk"></p>

                    <label for="pokemonDef" class="sr-only">Points de Défense du Pokemon</label>
                    <input type="number" id="pokemonDef" min="10" max="255" name="pokemonDef" class="form-control mb-2" placeholder="Points de Défense du Pokemon" required autofocus>
                    <p class="field-error" data-field="pokemonDef"></p>
                    <select id="typePokemon" name="type" class="form-control">
                        <option selected disabled>Sélectionnez...</option>
                        <?php foreach ($types as $type) { ?>
                            <option value="<?= $type->id ?>"><?= $type->typ_name ?></option>
                        <?php } ?>
                    </select>
                    <p class="field-error" data-field="type"></p>

                </div>

                <button class="btn btn-lg btn-gold btn-block mt-4" type="submit">Création du Pokemon</button>
                <p class="mt-5 mb-3 text-light text-center">&copy; Poké Academy <img src="https://i.pinimg.com/originals/62/94/6e/62946e7ca82fa5dcd5f3e38d1d09c2f1.png" height="16" alt=""> 2020 </p>
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
