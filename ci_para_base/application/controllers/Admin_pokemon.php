<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pokemon extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

        // Si je ne suis pas connecté
        if(!$this->logged){
            redirect();
        }

        $this->load->model('pokemon_model', 'pokeManager');
        $this->load->model('user_model', 'userManager');
        $this->load->model('admin_pokemon_model', 'adminPokeManager');

        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/js/admin/pokemons',
        ));

	}

	public function index() {

        $this->data['pokemons'] = $this->pokeManager->getPokemons('*');

        $this->data['title'] = 'Administration - Pokémon';

        $this->data['subview'] = 'front_office/administration/pokemon/pokemon';

        $this->load->view('components_home/main', $this->data);

    }


    public function add($insert = false) {

        if(!$insert){

            $this->data['types'] = $this->pokeManager->getTypes('*');

            $this->data['title'] = 'Créateur de pokemon';

            $this->data['subview'] = 'front_office/pokemon/add';

            $this->load->view('components_home/main', $this->data);

        } else {

            // INSERT
            $dataRecues = $this->input->post();

            $rulesArray = array(
                array(
                    'field' => 'pokemonNom',
                    'label' => 'Le nom du pokemon',
                    'rules' => 'trim|required|min_length[3]|max_length[15]|callback_check_exist_pokemon'
                ),
                array(
                    'field' => 'pokemonHp',
                    'label' => 'Les hps du pokemon',
                    'rules' => 'trim|required|min_length[1]|max_length[3]|greater_than[0]|less_than_equal_to[500]'
                ),
                array(
                    'field' => 'pokemonHeight',
                    'label' => 'La taille du pokemon',
                    'rules' => 'trim|required|min_length[1]|max_length[3]|greater_than[1]|less_than_equal_to[20]'
                ),
                array(
                    'field' => 'pokemonWeight',
                    'label' => 'Le poid du pokemons',
                    'rules' => 'trim|required|min_length[1]|max_length[3]|greater_than[1]|less_than_equal_to[320]'
                ),
                array(
                    'field' => 'pokemonAtk',
                    'label' => "Points d'attaque",
                    'rules' => 'trim|required|min_length[1]|max_length[3]|greater_than[10]|less_than_equal_to[255]'
                ),
                array(
                    'field' => 'pokemonDef',
                    'label' => "Points de défense",
                    'rules' => 'trim|required|min_length[1]|max_length[3]|greater_than[10]|less_than_equal_to[255]'
                ),
                array(
                    'field' => 'type',
                    'label' => 'Type',
                    'rules' => 'trim|required|integer|callback_check_exist_type'
                )
            );

            $this->form_validation->set_rules($rulesArray);

            if ($this->form_validation->run() === FALSE) {
                //echo 'Erreur';
                $errorsArray = $this->form_validation->get_all_errors();

                header('Content-type:application/json');
                echo json_encode(array(
                    'error' => $errorsArray
                ));

            } else {

                $dataUpdate['pok_name'] = $this->input->post('pokemonNom');
                $dataUpdate['pok_type'] = $this->input->post('type');
                $dataUpdate['pok_hp'] = $this->input->post('pokemonHp');
                $dataUpdate['pok_atk'] = $this->input->post('pokemonAtk');
                $dataUpdate['pok_def'] = $this->input->post('pokemonDef');
                $dataUpdate['pok_weight'] = $this->input->post('pokemonWeight');
                $dataUpdate['pok_height'] = $this->input->post('pokemonHeight');

                $dataUpdate['pok_img_url']= 'https://toppng.com/uploads/preview/3d-pokeball-transparent-pokemon-ball-3d-11563014173yzufy0aq4i.png   ';
                $dataUpdate['pok_description']= 'Pokemon créer par la communauté';
                $dataUpdate['pok_evol_id']= '5';

                $dataUpdate['created_at'] = date('Y-m-d H:i:s');

                $this->db->insert('pokemons', $dataUpdate);
                $insert_id = $this->db->insert_id();


                if ($insert_id) {
                    header('Content-type:application/json');
                    echo json_encode(array(
                        'success' => 'Votre pokemon a été créé avec succès.',
                        'id_pokemon' => $insert_id
                    ));
                } else {
                    header('Content-type:application/json');
                    echo json_encode(array(
                        'error' => 'Erreur lors de la création du pokemon.'
                    ));
                }
            }
        }

        //die(var_dump($this->data['pokemons']));

    }

    public function check_exist_type($data) {

        $typeChecker = $this->pokeManager->checkExistTypes('id', $data);

        if ($typeChecker) {
            return true;
        } else {
            $this->form_validation->set_message('Type', 'Ce type n"existe pas');
            return false;
        }

    }
    public function check_exist_pokemon($data) {
        $pokemonChecker = $this->pokeManager->checkExistPokemon('pok_name', $data);



        if ($pokemonChecker) {
            $this->form_validation->set_message('check_exist_pokemon', 'Ce pokemon est déjà utilisé');
            return false;

        } else {
            return true;

        }

    }


    public function getViewEdit() {
        
        $pokemon = $this->input->post();

        $this->data['selected_pokemon'] = $this->adminPokeManager->getType('p.*, pt.typ_name, pt.id AS id_type','poke_type pt','p.pok_type = pt.id','p.id', $pokemon['pokemon']);
        $this->data['types'] = $this->adminPokeManager->getAllTypes('poke_type.*');

        $view = $this->load->view('front_office/administration/pokemon/pokemon_edit_modal_content', $this->data, true);

        header('Content-type:application/json');
        echo json_encode(array(
            'view' => $view
        ));

    }

    public function edit() {

        $rulesArray = array(

            array(
                'field' => 'editID',
                'label' => 'ID du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editName',
                'label' => 'Nom du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editIMG',
                'label' => 'Image du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editType',
                'label' => 'Type du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editDesc',
                'label' => 'Description du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editHeight',
                'label' => 'Taille du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editWeight',
                'label' => 'Poids du pokémon',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'editHP',
                'label' => 'HP du pokémon',
                'rules' => 'trim|required'
            )

        );

        $this->form_validation->set_rules($rulesArray);

        if ($this->form_validation->run() === FALSE) {
            //echo 'Erreur';
            $errorsArray = $this->form_validation->get_all_errors();

            header('Content-type:application/json');
            echo json_encode(array(
                'error' => $errorsArray
            ));

        } else {

            $data = $this->input->post();

            $this->adminPokeManager->editPokemon($data);

            header('Content-type:application/json');
            echo json_encode(array(
                'editID' => $this->input->post('editID'),
                'editName' => $this->input->post('editName'),
                'editIMG' => $this->input->post('editIMG')
            ));

        }

    }

    public function getSearchEdit() {

        $rulesArray = array(

            array(
                'field' => 'editSearch',
                'label' => 'Recherche du pokémon',
                'rules' => 'trim|required'
            )

        );

        $this->form_validation->set_rules($rulesArray);

        if ($this->form_validation->run() === FALSE) {
            //echo 'Erreur';
            $errorsArray = $this->form_validation->get_all_errors();

            header('Content-type:application/json');
            echo json_encode(array(
                'error' => $errorsArray
            ));

        } else {

            $like = $this->input->post();

            $this->data['pokemons'] = $this->pokeManager->getPokemonsLike('*', $like['editSearch']);
            $this->data['length'] = count($this->data['pokemons']);

            $view = $this->load->view('front_office/administration/pokemon/pokemon_search_result_content', $this->data, true);

            header('Content-type:application/json');
            echo json_encode(array(
                'view' => $view
            ));

        }

    }

}
