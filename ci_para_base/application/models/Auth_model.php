<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->encryption->initialize(
			array(
				'cipher' => 'aes-256',
				'mode' => 'ctr',
				'key' => 'P0kemon@cademy2020'
			)
		);
	}

	public function cipherPassword($password) {

	    $cipherPassword = $this->encryption->encrypt($password);

	    return $cipherPassword;
    }

}
