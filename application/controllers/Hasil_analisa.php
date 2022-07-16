<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_analisa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->checkUserIsLogin();
		$this->load->model('analisa');
	}

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

}