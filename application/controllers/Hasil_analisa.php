<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_analisa extends CI_Controller {

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
		$title = 'hasil_analisa';

		$data['page_title'] = 'Hasil Analisa';

		$data['card_title']	= array(
			'Raw Sugar', 'Gilingan', 'Pemurnian', 'Penguapan', 'DRK', 
			'Masakan', 'Stroop', 'Gula', 'Tetes', 'Ketel',
		);

		$data['card_url']	= array(
			'hasil_analisa/rs', 'hasil_analisa/gilingan', 
			'hasil_analisa/pemurnian', 'hasil_analisa/penguapan', 
			'hasil_analisa/drk', 'hasil_analisa/masakan', 
			'hasil_analisa/stroop', 'hasil_analisa/gula', 
			'hasil_analisa/tetes', 'hasil_analisa/ketel',
		);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/main', $data);
		$this->load->view('static/footer');
	}

	public function rs()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Raw Sugar';
		$data['sampel']			= array('Raw Sugar Kedatangan', 'Raw Sugar Silo');
		$data['id']				= $this->id_sampel->getIDForRS();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] 	= $this->analisa->getAnalisaGulaLatest5($data['id'][$i]);
			$data['url'][$i] 			= base_url('hasil_analisa/analisa_gula/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_gula', $data);
		$this->load->view('static/footer');

	}

	public function gilingan()
	{
		$title = 'hasil_analisa';

		$data['page_title'] 			= 'Gilingan';
		$data['sampel_ng']				= array('Nira Gilingan 1', 'Nira Gilingan 2', 'Nira Gilingan 3', 'Nira Gilingan 4', 'Nira Gilingan 5', );
		$data['sampel_ag']				= array('Ampas Gilingan 1', 'Ampas Gilingan 2', 'Ampas Gilingan 3', 'Ampas Gilingan 4', 'Ampas Gilingan 5',);
		$data['id_nira_gilingan']		= $this->id_sampel->getIDForGilingan();
		$data['id_ampas_gilingan']		= $this->id_sampel->getIDForAmpasGilingan();
		$data['nira_gilingan'][0]		= $this->analisa->getAnalisaNppLatest5();
		$data['url_nira_gilingan'][0]	= base_url('hasil_analisa/analisa_npp');
		
		for($i=0; $i < count($data['id_nira_gilingan']); $i++)
		{
			$data['nira_gilingan'][$i+1] 		= $this->analisa->getAnalisaBrixPolLatest5($data['id_nira_gilingan'][$i]);
			$data['url_nira_gilingan'][$i+1]	= base_url('hasil_analisa/analisa_gilingan/'.$data['id_nira_gilingan'][$i]);
		}
		for($i=0; $i < count($data['id_ampas_gilingan']); $i++)
		{
			$data['ampas_gilingan'][$i] 		= $this->analisa->getAnalisaAmpasLatest5($data['id_ampas_gilingan'][$i]);
			$data['url_ampas_gilingan'][$i]		= base_url('hasil_analisa/analisa_ampas_gilingan/'.$data['id_ampas_gilingan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_gilingan', $data);
		$this->load->view('static/footer');
	}

	public function gula()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Gula in Proses';
		$data['sampel']			= array('Gula R1', 'Gula R2', 'Gula A Raw', 'Gula RS', 'Gula C', 'Gula D1', 'Gula D2', 'Gula SHS');
		$data['id']				= $this->id_sampel->getIDForGula();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] 	= $this->analisa->getAnalisaGulaLatest5($data['id'][$i]);
			$data['url'][$i] 			= base_url('hasil_analisa/analisa_gula/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_gula', $data);
		$this->load->view('static/footer');

	}

}