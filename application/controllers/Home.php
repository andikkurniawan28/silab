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
		$data['page_title'] = ucfirst('home');
		$this->load->view('static/header', $data);
		$this->load->view('home/main');
		$this->load->view('static/footer');
	}

}