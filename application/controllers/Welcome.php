<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_login();
		$this->load->library('user_agent');
		$this->load->model('Analisa_Model');
	}

	public function check_login()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}
	
}
