<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_login();
	}

	public function check_login()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

	public function index()
	{
		$data['page_title'] = ucfirst('home');
		$this->load->view('static/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('static/footer');
	}

	public function monitoring()
	{
		$data['page_title'] = ucfirst('monitoring');

		$this->load->view('static/header', $data);
		$this->load->view('monitoring/dashboard');
		$this->load->view('static/footer');
	}

	public function analisa()
	{
		$data['page_title'] 	= ucfirst('analisa');

		$this->load->model('Analisa_Model');
		$this->load->model('ID_Sampel_Model');
		
		$data['id_gilingan']		= $this->ID_Sampel_Model->getIDForGilingan();
		$data['id_ampas_gilingan']	= $this->ID_Sampel_Model->getIDForAmpasGilingan();
		$data['id_nira_pemurnian']	= $this->ID_Sampel_Model->getIDForNiraPemurnian();
		$data['id_blotong']			= $this->ID_Sampel_Model->getIDForBlotong();

		$data['npp']				= $this->Analisa_Model->getAnalisaNppLatest5();

		for($i=0; $i < count($data['id_gilingan']); $i++)
			$data['nira_gilingan'][$i+2] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_gilingan'][$i]);

		for($i=0; $i < count($data['id_ampas_gilingan']); $i++)
			$data['ampas_gilingan'][$i+1] = $this->Analisa_Model->getAnalisaAmpasLatest5($data['id_ampas_gilingan'][$i]);

		for($i=0; $i < count($data['id_nira_pemurnian']); $i++)
			$data['nira_pemurnian'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_nira_pemurnian'][$i]);

		for($i=0; $i < count($data['id_blotong']); $i++)
			$data['blotong'][$i] = $this->Analisa_Model->getAnalisaBlotongLatest5($data['id_blotong'][$i]);

		$this->load->view('static/header', $data);
		$this->load->view('analisa/dashboard', $data);
		$this->load->view('static/footer');
	}
}
