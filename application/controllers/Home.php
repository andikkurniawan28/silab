<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->checkUserIsLogin();
	}

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

	public function index()
	{
		$title 	= 'home';
		$data['page_title'] = ucfirst($title);
		$this->load->view('static/header', $data);
		$this->load->view($title.'/main');
		$this->load->view('static/footer');
	}

}