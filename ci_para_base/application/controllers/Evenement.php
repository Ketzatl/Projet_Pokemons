<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evenement extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evenement_model', 'evenementManager');


    }

    public function index()
    {

        $this->data['title'] = 'Évenements';



        $this->data['evenements'] = $this->evenementManager->getEvenements('*');


        $this->data['subview'] = 'front_office/evenement/evenements';
        $this->load->view('components_home/main', $this->data);


    }

    public function show($id)
    {
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/js/signalement'
        ));


        // Traitement de la donnée :
        $evenements = $this->evenementManager->getEvenements('*', 'id', $id, 'row');

        if ($evenements) {
            $this->data['evenement'] = $evenements;
        } else {
            $this->index();
        }

        //die(var_dump($pokemon));
        //Chargement des données
        $this->data['title'] = 'Evenement - '.$evenements->titre;
        //die(var_dump($this->data['pokemon']));
        // Chargement de la vue
        $this->data['subview'] = 'front_office/evenement/evenement';

        $this->load->view('components_home/main', $this->data);
    }


    public function signalement() {



        $rulesArray = array(
            array(
                'field' => 'raison',
                'label' => 'Raison',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'trim|required'
            ),
            array(
              'field' => 'id',
              'label' => 'id',
                'rules' => 'trim|required'
            ),

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
            // Tu insert le signalement
            $data['sig_raison'] = $this->input->post('raison');
            $data['sig_description'] = $this->input->post('description');
            $data['evenement_id'] = $this->input->post('id');
            $this->db->insert('signalements', $data);

        }


    }



}

