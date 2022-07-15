<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
	}

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

	public function checkUserIsAdmin()
	{
		if($this->session->role != 'admin')
			redirect(base_url('auth'));
	}

	public function index()
	{
		$data['page_title'] = 'Input Data';
		$data['card_title']	= array(
            'saccharomat', 
            'coloromat' , 
            'moisture'
            /*, 'analisa_umum', 
            'analisa_ampas', 
            'analisa_ketel', 
            'analisa_tsai', 
            'analisa_so2', 
            'analisa_bjb'*/
        );

		$this->load->view('static/header', $data);
		$this->load->view('input/dashboard', $data);
		$this->load->view('static/footer');
	}

}