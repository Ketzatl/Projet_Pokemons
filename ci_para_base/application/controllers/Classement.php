<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classement extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pokemon_model', 'pokeManager');

        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/js/vote_pokemon_favoris'
        ));

        if(!$this->logged){
            redirect('auth/login');
        }
    }

    public function index()
    {

        $this->data['pokemons'] = $this->pokeManager->getPokemons('*');
        $this->data['title'] = 'Ton pokemon préféré';

        $this->data['subview'] = 'front_office/classementPokemon/main';

        $this->load->view('components_home/main', $this->data);

    }


    public function pokemon($id)
    {

        // Traitement de la donnée :
        $pokemon = $this->pokeManager->getPokemons('*', 'id', $id, 'row');

        //die(var_dump($pokemon));

        if ($pokemon) {
            $this->data['pokemon'] = $pokemon;
        } else {
            $this->index();
        }

        //Chargement des données
        //die(var_dump($this->data['pokemon']));

        // Chargement de la vue
        $this->data['subview'] = 'front_office/pokemon_profile/main';

        $this->load->view('components_home/main', $this->data);
    }

    public function vote()
    {

        $rulesArray = array(
            array(
                'field' => 'pokemon',
                'label' => 'Pseudo',
                'rules' => 'trim|required|callback_pokemon_check'
            ),

        );

        $this->form_validation->set_rules($rulesArray);

        if ($this->form_validation->run() === FALSE) {
            //echo 'Erreur';

            header('Content-type:application/json');
            echo json_encode(array(
                'error' => 'Pokémon introuvable'
            ));
        } else {
            //die('coucou');
            $dataUpdate = array(
                'pok_pref' => $this->input->post('pokemon')
            );
            $dataUpdateWhere = array(
                'id' => $this->appli_user->id
            );
            $this->userManager->updateUser($dataUpdate,$dataUpdateWhere);

            header('Content-type:application/json');
            echo json_encode(array(
                'success' => 'Pokémon voté'
            ));
        }
        //die(var_dump($vote));

    }


    public function pokemon_check($data)
    {
        $pokemonChecker = $this->pokeManager->checkExistPokemons(array('id' => $data));

       // die(var_dump($pokemonChecker));

        if ($pokemonChecker === true) {
            $this->form_validation->set_message('pokemon_check', 'Ce pokemon n\'existe pas');
            return false;
        } else {
            return true;
        }
        //die(var_dump($pokemonChecker));

    }
}
