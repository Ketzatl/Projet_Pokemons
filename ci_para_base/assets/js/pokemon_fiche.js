$('button.btn-next-pokemon').on('click', function () {
    const pokeID = $('button.btn-next-pokemon').val();

    var url = site_url + 'getPokemon/' + pokeID;




    $.ajax({
        url : url,
        type : 'POST',
        success: function (data) {
            //console.log(data);

            var pokemon = data.pokemon;

            checkFirstPokemon(pokemon.id);


            //console.log(pokemon.id);

            $('img.img-pokemon').attr('src', pokemon.pok_img_url);
            $('span.poke-type').text(pokemon.pok_type);
            $('span.poke-hp').text(pokemon.pok_hp);
            $('span.poke-weight').text(pokemon.pok_weight);
            $('span.poke-height').text(pokemon.pok_height);
            $('p.poke-description').text(pokemon.pok_description);
            $('button.btn-next-pokemon').val(parseInt(pokemon.id) + 1);
            $('button.btn-last-pokemon').val(parseInt(pokemon.id - 1));

        }
    })
});

$('button.btn-last-pokemon').on('click', function () {
    const pokeID = $('button.btn-last-pokemon').val();

    //console.log(parseInt(pokeID) + 1);

    var url = site_url + 'getPokemon/' + pokeID;




    $.ajax({
        url : url,
        type : 'POST',
        success: function (data) {
            //console.log(data);

            var pokemon = data.pokemon;

            console.log(pokemon.id);
            checkFirstPokemon(pokemon.id);


            //console.log(pokemon.id);

            $('img.img-pokemon').attr('src', pokemon.pok_img_url);
            $('span.poke-type').text(pokemon.pok_type);
            $('span.poke-hp').text(pokemon.pok_hp);
            $('span.poke-weight').text(pokemon.pok_weight);
            $('span.poke-height').text(pokemon.pok_height);
            $('p.poke-description').text(pokemon.pok_description);
            $('button.btn-next-pokemon').val(parseInt(pokemon.id));
            $('button.btn-last-pokemon').val(parseInt(pokemon.id) - 1);

        }
    })
});




function checkFirstPokemon(pokemonID) {
    if (pokemonID === "1") {
        $('button.btn-last-pokemon').addClass('disabled')
    }
}