<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header bg-grey-dark-plus text-green">Comparateur de caractéristiques</h5>
                <div class="card-body">
                    <form class="form-compare-pokemons">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputPokemon1">Pokémon 1</label>
                                    <select id="inputPokemon1" name="pokemon1" class="form-control">
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
                                <p class="text-danger error mt-3"></p>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputPokemon2">Pokémon 2</label>
                                    <select id="inputPokemon2" name="pokemon2" class="form-control">
                                        <option selected disabled>Sélectionnez...</option>
                                        <?php foreach ($pokemons as $pokemon) { ?>
                                            <option value="<?= $pokemon->id ?>"><?= $pokemon->pok_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr class="bg-grey-dark-plus">
                </div>
                <div class="card-body text-center pokemonDisplay" style="display: none;">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="pok_name_A">{{ pok_name }}</h6>
                            <img class="pok_img_url_A" src="" alt="" style="max-height: 100px"><br>
                            <img class="pok_type_img_url_A" src="" alt="">
                        </div>
                        <div class="col-4">
                            <h2>VS.</h2>
                            <table class="table table-dark text-center text-gold">
                                <thead>
                                <tr>
                                    <th>Stats</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <th class="pok_hp" scope="row"></th>
                                </tr>
                                <tr>
                                    <td class="pok_weight"></td>
                                </tr>
                                <tr>
                                    <td class="pok_height"></td>
                                </tr>
                                <tr>
                                    <td class="pok_atk"></td>
                                </tr>
                                <tr>
                                    <td class="pok_def"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <h6 class="pok_name_B">{{ pok_name }}</h6>
                            <img class="pok_img_url_B" src="" alt="" style="max-height: 100px"><br>
                            <img class="pok_type_img_url_B" src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
