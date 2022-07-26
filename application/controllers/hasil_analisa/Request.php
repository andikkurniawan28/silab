<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->checkUserIsLogin();
		$this->load->model('collection/analisa');
		$this->load->model('collection/id_sampel');
	}

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
		redirect(base_url('auth'));
	}

	public function index()
	{
		$data['page_title'] = 'Request';
		$data['hasil_analisa'] = $this->analisa->getAnalisaRequestAll();
		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/request/main', $data);
		$this->load->view('static/footer');
    }

}
