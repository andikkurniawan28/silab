<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_data extends CI_Controller {

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
            'analisa NPP', 
            'saccharomat', 
            'coloromat', 
            'moisture'
        );
        $data['url'] = array(
            'analisa_npp',
            'saccharomat',
            'coloromat',
            'moisture',
        );

		$this->load->view('static/header', $data);
		$this->load->view('input/dashboard', $data);
		$this->load->view('static/footer');
	}

}