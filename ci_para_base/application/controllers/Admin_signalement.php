<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_signalement extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Si je ne suis pas connecté
        if(!$this->logged){
            redirect();
        }

        $this->load->model('Signalement_model', 'signalManager');

    }

    public function index()
    {

        $this->data['signalement'] = $this->signalManager->getSignalement('*');

        //die(var_dump($pokemon));
        //Chargement des données
        $this->data['title'] = 'Administration - Signalements des Événements';
        //die(var_dump($this->data['pokemon']));
        // Chargement de la vue
        $this->data['subview'] = 'front_office/signalementPage/main';

        $this->load->view('components_home/main', $this->data);
    }
}

