<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $logged = false;
    public $appli_user = array();

	public function __construct()
	{
		parent::__construct();


        $this->load->library('layout');
        $this->load->model('user_model', 'userManager');

        $this->checkIfLoggedIn();


        // Chargement des CSS
        $this->data['css'] = $this->layout->add_css(array(
            'assets/plugins/bootstrap/css/bootstrap.min',
            'assets/plugins/sweetalert/sweetalert2.min',
            'assets/plugins/fontawesome/all.min',
            'assets/css/styles'
        ));
        // Chargement des JS
        $this->data['js'] = $this->layout->add_js(array(
            'assets/plugins/jquery-3.3.1.min',
            'assets/plugins/bootstrap/js/bootstrap.min',
            'assets/plugins/sweetalert/sweetalert2.all.min',
            'assets/plugins/fontawesome/all.min'
        ));




	}

	public function checkIfLoggedIn() {

        $user = $this->session->userdata('user');
        $email = $this->session->userdata('email');
        if($user && $email){
            $user = $this->userManager->checkExistUser(array('use_pseudo' => $user, 'use_email' => $email));
            if($user){
                $this->appli_user = $user;
                $this->logged = true;
            }
        }

	}


}

class MY_Back extends CI_Controller {
	protected $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('layout');

		$this->data['css'] = $this->layout->add_css(array(
			'assets/plugins/bootstrap/css/bootstrap.min',
			'assets/css/styles',
		));
		$this->data['js'] = $this->layout->add_js(array(
			'assets/plugins/jquery-3.3.1.min',
			'assets/plugins/bootstrap/js/bootstrap.min',
			'assets/plugins/stickyfill/dist/stickyfill.min',
			'assets/js/main',
		));

		$this->session->userdata('active_user') == null ? redirect('') : 'dashboard';

		if ($this->session->userdata('active_user') != null) {

			$this->data['active_user'] = $this->session->userdata('active_user');
		}

	}
}
