<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_analisa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->checkUserIsLogin();
		$this->load->model('collection/analisa');
	}

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

	public function index()
	{
		$title = 'hasil_analisa';

		$data['page_title'] = 'Hasil Analisa';

		$data['card_title']	= array(
			'Raw Sugar', 
			'Gilingan', 
			'Pemurnian', 
			'Penguapan', 
			'DRK', 
			'Masakan', 
			'Stroop', 
			'Gula', 
			'Tetes', 
			'Ketel',
		);

		$data['card_url']	= array(
			'hasil_analisa/rs',
			'hasil_analisa/gilingan',
			'hasil_analisa/pemurnian',
			'hasil_analisa/penguapan',
			'hasil_analisa/drk',
			'hasil_analisa/masakan',
			'hasil_analisa/stroop',
			'hasil_analisa/gula',
			'hasil_analisa/tetes',
			'hasil_analisa/ketel',
		);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/main', $data);
		$this->load->view('static/footer');
	}

}