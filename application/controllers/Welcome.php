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
		$data['page_title'] = ucfirst('analisa');
		$data['card_title']	= array('gilingan', 'pemurnian', 'penguapan', 'drk', 'masakan', 'stroop', 'gula', 'ketel');

		$this->load->view('static/header', $data);
		$this->load->view('analisa/dashboard', $data);
		$this->load->view('static/footer');
	}

	public function hasil_analisa($stasiun)
	{
		$data['page_title'] = ucfirst($stasiun);

		// Load Model 
		$this->load->model('Analisa_Model');
		$this->load->model('ID_Sampel_Model');

		// Determine which data will be parsed
		switch($stasiun)
		{
			case 'gilingan' : 
				$data['id_gilingan']		= $this->ID_Sampel_Model->getIDForGilingan();
				$data['id_ampas_gilingan']	= $this->ID_Sampel_Model->getIDForAmpasGilingan();
				$data['npp']				= $this->Analisa_Model->getAnalisaNppLatest5();

				for($i=0; $i < count($data['id_gilingan']); $i++) 
					$data['nira_gilingan'][$i+2] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_gilingan'][$i]);

				for($i=0; $i < count($data['id_ampas_gilingan']); $i++) 
					$data['ampas_gilingan'][$i+1] = $this->Analisa_Model->getAnalisaAmpasLatest5($data['id_ampas_gilingan'][$i]);
			break;

			case 'pemurnian' :
				$data['id_nira_pemurnian']	= $this->ID_Sampel_Model->getIDForNiraPemurnian();
				$data['id_blotong']			= $this->ID_Sampel_Model->getIDForBlotong();

				for($i=0; $i < count($data['id_nira_pemurnian']); $i++)
					$data['nira_pemurnian'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_nira_pemurnian'][$i]);

				for($i=0; $i < count($data['id_blotong']); $i++) 
					$data['blotong'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_blotong'][$i]);
			break;

			case 'penguapan' :
				$data['id_penguapan']		= $this->ID_Sampel_Model->getIDForPenguapan();

				for($i=0; $i < count($data['id_penguapan']); $i++)
					$data['penguapan'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_penguapan'][$i]);
			break;

			case 'drk' :
				$data['id_drk']				= $this->ID_Sampel_Model->getIDForDRK();
				$data['id_cake']			= $this->ID_Sampel_Model->getIDForCake();

				for($i=0; $i < count($data['id_drk']); $i++)
					$data['drk'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_drk'][$i]);

				for($i=0; $i < count($data['id_cake']); $i++)
					$data['cake'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_cake'][$i]);
			break;

			case 'masakan' :
				$data['id_masakan']				= $this->ID_Sampel_Model->getIDForMasakan();

				for($i=0; $i < count($data['id_masakan']); $i++)
					$data['masakan'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_masakan'][$i]);
			break;

			case 'stroop' :
				$data['id_stroop']				= $this->ID_Sampel_Model->getIDForStroop();

				for($i=0; $i < count($data['id_stroop']); $i++)
					$data['stroop'][$i] = $this->Analisa_Model->getAnalisaBrixPolLatest5($data['id_stroop'][$i]);
			break;

			case 'gula' :
				$data['id_gula']				= $this->ID_Sampel_Model->getIDForGula();

				for($i=0; $i < count($data['id_gula']); $i++)
					$data['gula'][$i] = $this->Analisa_Model->getAnalisaIcumsaLatest5($data['id_gula'][$i]);
			break;

			case 'ketel' :
					$data['ketel']				= $this->Analisa_Model->getAnalisaKetelLatest5();
			break;
		}

		// Load View Here
		$this->load->view('static/header', $data);
		$this->load->view('analisa/'.$stasiun, $data);
		$this->load->view('static/footer');

	}

	public function show_analisa_npp($material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaNppAll();

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_npp', $data);
		$this->load->view('static/footer');
		
	}

	public function show_analisa_gilingan($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBrixPolAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_nira_gilingan', $data);
		$this->load->view('static/footer');
		
	}

	public function show_analisa_ampas_gilingan($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaAmpasAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_ampas', $data);
		$this->load->view('static/footer');
		
	}
	
}
