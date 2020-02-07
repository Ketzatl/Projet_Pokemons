<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-compare-pokemons">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="selectPokemon1">Pokémon 1</label>
                                    <select id="selectPokemon1" name="pokemon1" class="form-control">
                                        <option selected disabled>Sélectionnez...</option>
                                        <?php foreach ($pokemons as $pokemon) { ?>
                                            <option value="<?= $pokemon->id ?>"><?= $pokemon->pok_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col text-center">
                                <h1>🔥</h1>
                                <button type="button" class="btn btn-outline-danger btn-compare-pokemons">FIGHT !</button>
                                <p class="text-danger error"></p>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="selectPokemon2">Pokémon 2</label>
                                    <select id="selectPokemon2" name="pokemon2" class="form-control">
                                        <option selected disabled>Sélectionnez...</option>
                                        <?php foreach ($pokemons as $pokemon) { ?>
                                            <option value="<?= $pokemon->id ?>"><?= $pokemon->pok_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="div-comparateur-resultat" class="display-none card-body text-center">
                    <div class="row" >
                        <div class="col-4">
                            <h6 class="pok_name1"></h6>
                            <img src="" class="w-50 mt-3 img_pok1" alt="">
                            <p id="pok_1_description" class="mt-2 font-italic"></p>
                        </div>
                        <div class="col-4">
                            <h2 class="mb-2">VS</h2>
                            <table class="table table-dark table-bordered">
                                <thead>
                                <tr>
                                    <th>Stats</th>
                                    <th class="">Comparateur</th>

                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <th>ATTAQUE</th>
                                    <td class="ligneatk"></td>
                                </tr>
                                <tr>
                                    <th>DÉFENCE</th>
                                    <td class="lignedef"></td>
                                </tr>
                                <tr>
                                    <th>HP</th>
                                    <th class="lignehp"></th>
                                </tr>
                                <tr>
                                    <th>WEIGHT</th>
                                    <td class="ligneweight"></td>
                                </tr>
                                <tr>
                                    <th>HEIGHT</th>
                                    <td class="ligneheight"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <h6 class="pok_name2"></h6>
                            <img src="" class="w-50 mt-3 img_pok2" alt="">
                            <p id="pok_2_description" class="mt-2 font-italic"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
