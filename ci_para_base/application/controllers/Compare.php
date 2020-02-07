<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends MY_Controller {

    public function __construct()
    {
        parent::__construct(); // permet de charger les modèles
        $this->load->model('pokemon_model', 'pokeManager');
    }
    public function index(){
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/js/compare',
        ));

        $this->data['pokemons'] = $this->pokeManager->getPokemons('id, pok_name'); //Genre els noms des pokemon depuis la BDD dans le selecteur

        //die(var_dump( $this->data['pokemons']));
        $this->data['title'] = 'Comparateur de Pokémons';
        $this->data['logo'] = null;

        $this->data['subview'] = 'front_office/comparateur/main';
        $this->load->view('components_home/main', $this->data);

    }

    public function comparePokemons($idPok1, $idPok2) {

        //die(var_dump($idPok1, $idPok2));

        $pokemon1 = $this->pokeManager->getPokemons('*', 'id', $idPok1, 'row');
        $pokemon2 = $this->pokeManager->getPokemons('*', 'id', $idPok2, 'row');

        $compare =  $this->pokeManager->comparePokemon($pokemon1, $pokemon2);

        header("Content-type:application/json");
        echo json_encode(array(
            'pokemon1' => $pokemon1,
            'pokemon2' => $pokemon2,
            'content' => $compare
        ));

    }


}
