<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'authManager');


	}

	public function index() {

	    $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/css/styles',
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
            'assets/js/auth'
        ));

        $this->data['title'] = 'Connexion';

        $this->data['subview'] = 'front_office/auth/main';

        $this->load->view('components_home/main', $this->data);
    }

    public  function logout(){
        $this->session->sess_destroy();
        redirect();
    }

    public function login_attempt() {



        $rulesArray = array(
            array(
                'field' => 'loginPseudo',
                'label' => 'Pseudo',
                'rules' => 'trim|required|min_length[6]'
            ),
            array(
                'field' => 'loginPassword',
                'label' => 'Mot de passe',
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

            //die(var_dump($this->input->post()));
            $login = $this->input->post('loginPseudo');
            $password = $this->input->post('loginPassword');


            $checkUser = $this->userManager->checkExistUser(
                array(
                    'use_pseudo' => $login
                ));

            //die(var_dump($checkUser));

            if ($checkUser) {

                $checkCouple = $this->userManager->hash_verify($checkUser->use_password, $password);

                if ($checkCouple) {

                    $this->session->set_userdata('user', $login);
                    $this->session->set_userdata('email', $checkUser->use_email);
                    //die(var_dump($this->session->userdata('')))
                    header('Content-type:application/json');
                    echo json_encode(array(
                        'success' => 'Vous êtes connectés.'
                    ));
                } else {

                    header('Content-type:application/json');
                    echo json_encode(array(
                        'error' => 'Pseudo ou Mot de passe incorrect'
                    ));
                }



            } else {

                header('Content-type:application/json');
                echo json_encode(array(
                    'error' => array('error_general' => 'Pseudo ou Mot de passe incorrect')
                ));
            }
        }


    }


    public function register() {

	    $dataRecues = $this->input->post();

	    $rulesArray = array(
            array(
                'field' => 'registerPseudo',
                'label' => 'Pseudo',
                'rules' => 'trim|required|min_length[6]|callback_pseudo_check'
            ),
            array(
                'field' => 'registerEmail',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|callback_email_check'
            ),
            array(
                'field' => 'registerPassword',
                'label' => 'Mot de Passe',
                'rules' => 'trim|required|matches[registerPasswordConfirm]'
            ),
            array(
                'field' => 'registerPasswordConfirm',
                'label' => 'Confirmation',
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

	        //die(var_dump($this->input->post('registerPseudo')));
            $password = $this->input->post('registerPassword');

            $passwordCipher = $this->authManager->cipherPassword($password);

            //die(var_dump($passwordCipher));



	        $data['use_pseudo'] = $this->input->post('registerPseudo');
            $data['use_email'] = $this->input->post('registerEmail');
            $data['use_password'] = $passwordCipher;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

	        $this->db->insert('users', $data);

	        if ($this->db->affected_rows() > 0) {

                $this->session->set_userdata('user', $data['use_pseudo']);
                $this->session->set_userdata('email', $data['use_email']);
                header('Content-type:application/json');

                echo json_encode(array(
	               'success' => 'Votre compte a été créé avec succès.'
                ));
            } else {
                header('Content-type:application/json');

                echo json_encode(array(
                    'error' => 'Erreur lors de la création du Compte.'
                ));
            }
        }



	    //die(var_dump($dataRecues));

	    //echo 'BOB MARLEY';
    }

	public function pseudo_check($data) {

		$pseudoChecker = $this->userManager->checkExistUser('use_pseudo', $data);

		// die(var_dump($pseudoChecker));

		if ($pseudoChecker === true) {
			$this->form_validation->set_message('pseudo_check', 'Ce pseudo est déjà utilisé');
			return false;
		} else {
			return true;
		}

	}
	public function email_check($data) {

		$emailChecker = $this->userManager->checkExistUser('use_email', $data);

		// die(var_dump($pseudoChecker));

		if ($emailChecker === true) {
			$this->form_validation->set_message('email_check', 'Cet email est déjà utilisé');
			return false;
		} else {
			return true;
		}

	}
}
