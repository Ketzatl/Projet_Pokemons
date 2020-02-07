<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pokemon_model', 'pokeManager');
	}

	public function index($id = false)
	{

	    // Si il n'y a pas d'id alors on affiche la liste des Pokémons
	    if(!$id){
            $this->data['pokemons'] = $this->pokeManager->getPokemons("*");

            if($this->logged){
                $this->data['pref'] = $this->pokeManager->getPokPref($this->appli_user->id);
            }

            $this->data['title'] = 'Contenu du Pokédex';

            $this->data['subview'] = 'front_office/pokemon/list';

            $this->load->view('components_home/main', $this->data);

        } else {
	        // Sinon on affiche le pokémon demandé

            // Chargement des JS
            $this->data['js'] = $this->layout->add_js(array(
                'assets/js/pokemon_fiche',
            ));
            // Traitement de la donnée :
            $pokemon = $this->pokeManager->getPokemons('*', 'id', $id, 'row');

            if ($pokemon) {
                $this->data['pokemon'] = $pokemon;
            } else {
                redirect('home');
            }

            //Chargement des données
            $this->data['title'] = 'Pokémon : '.$pokemon->pok_name;
            //die(var_dump($this->data['pokemon']));

            // Chargement de la vue
            $this->data['subview'] = 'front_office/pokemon/fiche';

            $this->load->view('components_home/main', $this->data);
        }

	}

	public function getPokemonById($id) {

        $pokemon = $this->pokeManager->getPokemon('*', 'id', $id, 'row');

        if ($pokemon) {
            header('Content-type:application/json');
            echo json_encode(array(
                'pokemon' => $pokemon,
            ));
        } else {
            return false;
        }



    }


}
