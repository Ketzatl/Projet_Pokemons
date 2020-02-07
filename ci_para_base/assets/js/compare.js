$('button.btn-compare-pokemons').on('click', function () {

    var formData = $('form.form-compare-pokemons').serialize();



    var pokemon1 = $('#selectPokemon1').val();
    var pokemon2 = $('#selectPokemon2').val();

    if (pokemon1 !== null &&  pokemon2 !== null) {
        $('p.error').text('');
        const url = site_url + 'compare-pokemons/' + pokemon1 + '/' + pokemon2;

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function (data) {
                var dataPok1 = data.pokemon1;
                var dataPok2 = data.pokemon2;
                var content = data.content;

                $('table.pok_tabl').show();
                // On met les noms
                $('h6.pok_name1').text(dataPok1.pok_name);
                $('h6.pok_name2').text(dataPok2.pok_name);
                // On met les images
                $('img.img_pok1').attr('src' , dataPok1.pok_img_url);
                $('img.img_pok2').attr('src' , dataPok2.pok_img_url);

                // On met les descriptions

                $('p#pok_1_description').text(dataPok1.pok_description);
                $('p#pok_2_description').text(dataPok2.pok_description);


                $('th.lignehp').text(content.hp);
                $('td.ligneweight').text(content.weight);
                $('td.ligneheight').text(content.height);
                $('td.ligneatk').text(content.attaque);
                $('td.lignedef').text(content.defense);


                $('#div-comparateur-resultat').slideDown();

            }
        });
        //window.location.href = url;
    } else {
        $('p.error').text('Champs Incomplet');
    }
});

function getTypePokemon(type_id) {
    //console.log(type_id);
    let url;
    switch (type_id) {
        case '1':
            url = 'https://www.pokepedia.fr/images/thumb/3/35/Miniature_Type_Plante_EB.png/68px-Miniature_Type_Plante_EB.png';
            break;
        case '2':
           url = 'https://www.pokepedia.fr/images/thumb/2/28/Miniature_Type_Poison_EB.png/68px-Miniature_Type_Poison_EB.png';
            break;
        case '3':
            url = 'https://www.pokepedia.fr/images/thumb/f/fc/Miniature_Type_Feu_EB.png/68px-Miniature_Type_Feu_EB.png';
            break;
        case '4':
            url = 'https://www.pokepedia.fr/images/thumb/6/62/Miniature_Type_Vol_EB.png/68px-Miniature_Type_Vol_EB.png';
            break;
        case '5':
            url = 'https://www.pokepedia.fr/images/thumb/4/4c/Miniature_Type_Eau_EB.png/70px-Miniature_Type_Eau_EB.png';
            break;
        case '6':
            url = 'https://www.pokepedia.fr/images/thumb/e/ee/Miniature_Type_Insecte_EB.png/70px-Miniature_Type_Insecte_EB.png';
            break;
        case '7':
            url = 'https://www.pokepedia.fr/images/thumb/2/2e/Miniature_Type_Normal_EB.png/70px-Miniature_Type_Normal_EB.png';
            break;
        case '8':
            url = 'https://www.pokepedia.fr/images/thumb/6/6c/Miniature_Type_%C3%89lectrik_EB.png/70px-Miniature_Type_%C3%89lectrik_EB.png';
            break;
        case '9':
            url = 'https://www.pokepedia.fr/images/thumb/d/d6/Miniature_Type_Sol_EB.png/70px-Miniature_Type_Sol_EB.png';
            break;
        case '10':
            url = 'https://www.pokepedia.fr/images/thumb/1/1c/Miniature_Type_Combat_EB.png/70px-Miniature_Type_Combat_EB.png';
            break;
        case '11':
            url = 'https://www.pokepedia.fr/images/thumb/d/da/Miniature_Type_Psy_EB.png/70px-Miniature_Type_Psy_EB.png';
            break;
        case '12':
            url = 'https://www.pokepedia.fr/images/thumb/d/d3/Miniature_Type_Roche_EB.png/70px-Miniature_Type_Roche_EB.png';
            break;
        case '13':
            url = 'https://www.pokepedia.fr/images/thumb/7/7e/Miniature_Type_Glace_EB.png/70px-Miniature_Type_Glace_EB.png';
            break;
        case '14':
            url = 'https://www.pokepedia.fr/images/thumb/e/e5/Miniature_Type_Spectre_EB.png/68px-Miniature_Type_Spectre_EB.png';
            break;
        case '15':
            url = 'https://www.pokepedia.fr/images/thumb/2/23/Miniature_Type_Dragon_EB.png/68px-Miniature_Type_Dragon_EB.png';
            break;
        default: type = 'Undefined';
    }
    return url;
}
