<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_login();
		$this->load->library('user_agent');
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
		$data['card_title']	= array('rs', 'gilingan', 'pemurnian', 'penguapan', 'drk', 'masakan', 'stroop', 'gula', 'tetes', 'ketel');

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
					$data['nira_pemurnian'][$i] = $this->Analisa_Model->getAnalisaPemurnianLatest5($data['id_nira_pemurnian'][$i]);

				for($i=0; $i < count($data['id_blotong']); $i++) 
					$data['blotong'][$i] = $this->Analisa_Model->getAnalisaBlotongLatest5($data['id_blotong'][$i]);
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
					$data['drk'][$i] = $this->Analisa_Model->getAnalisaPemurnianLatest5($data['id_drk'][$i]);

				for($i=0; $i < count($data['id_cake']); $i++)
					$data['cake'][$i] = $this->Analisa_Model->getAnalisaCakeLatest5($data['id_cake'][$i]);
			break;

			case 'masakan' :
				$data['id_masakan']				= $this->ID_Sampel_Model->getIDForMasakan();

				for($i=0; $i < count($data['id_masakan']); $i++)
					$data['masakan'][$i] = $this->Analisa_Model->getAnalisaStroopLatest5($data['id_masakan'][$i]);
			break;

			case 'stroop' :
				$data['id_stroop']				= $this->ID_Sampel_Model->getIDForStroop();

				for($i=0; $i < count($data['id_stroop']); $i++)
					$data['stroop'][$i] = $this->Analisa_Model->getAnalisaStroopLatest5($data['id_stroop'][$i]);
			break;

			case 'gula' :
				$data['id_gula']				= $this->ID_Sampel_Model->getIDForGula();

				for($i=0; $i < count($data['id_gula']); $i++)
					$data['gula'][$i] = $this->Analisa_Model->getAnalisaGulaLatest5($data['id_gula'][$i]);
			break;

			case 'rs' :
				$data['id_rs']				= $this->ID_Sampel_Model->getIDForRS();

				for($i=0; $i < count($data['id_rs']); $i++)
					$data['rs'][$i] = $this->Analisa_Model->getAnalisaGulaLatest5($data['id_rs'][$i]);
			break;

			case 'ketel' :
					$data['ketel']['jj']				= $this->Analisa_Model->getAnalisaKetelJJLatest5();
					$data['ketel']['y1']				= $this->Analisa_Model->getAnalisaKetelY1Latest5();
					$data['ketel']['y2']				= $this->Analisa_Model->getAnalisaKetelY2Latest5();
					$data['ketel']['djj']				= $this->Analisa_Model->getAnalisaKetelDJJLatest5();
					$data['ketel']['dy']				= $this->Analisa_Model->getAnalisaKetelDYLatest5();
					$data['ketel']['wtp']				= $this->Analisa_Model->getAnalisaKetelWTPLatest5();
					$data['ketel']['hw']				= $this->Analisa_Model->getAnalisaKetelHWLatest5();
			break;
		}

		// Load View Here
		$this->load->view('static/header', $data);
		$this->load->view('analisa/'.$stasiun, $data);
		$this->load->view('static/footer');

	}

	/******************************************************************** */

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
		$data['id'] 		= $id;

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
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaAmpasAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_ampas', $data);
		$this->load->view('static/footer');	
	}

	public function show_analisa_pemurnian($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaPemurnianAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_pemurnian', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_blotong($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBlotongAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_blotong', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_penguapan($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBrixPolAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_penguapan', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_cake($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaCakeAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_cake', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_stroop($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaStroopAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_stroop', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_gula($id, $material)
	{
		$data['page_title'] = "Analisa ".ucfirst($material);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaGulaAll($id);

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_gula', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_ketel($id)
	{
		$data['page_title'] = "Analisa Ketel ".ucfirst($id);
		$data['id'] 		= $id;

		// Load Model 
		$this->load->model('Analisa_Model');

		switch($id)
		{
			case 'jj' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelJJAll($id);
				break;
			case 'y1' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY1All($id);
				break;
			case 'y2' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY2All($id);
				break;
			case 'djj' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDJJAll($id);
				break;
			case 'dy' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDYAll($id);
				break;
			case 'wtp' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelWTPAll($id);
				break;
			case 'hw' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelHWAll($id);
				break;

		}

		// Render View and Data
		$this->load->view('static/header', $data);
		$this->load->view('analisa/show_analisa/analisa_ketel', $data);
		$this->load->view('static/footer');
	}

	/**************************************************************************** */

	public function download_analisa_npp()
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaNppAll();

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_npp', $data);
	}

	public function download_analisa_gilingan($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBrixPolAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_nira_gilingan', $data);
	}

	public function download_analisa_ampas_gilingan($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaAmpasAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_ampas', $data);
	}

	public function download_analisa_pemurnian($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaPemurnianAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_pemurnian', $data);
	}

	public function download_analisa_blotong($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBlotongAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_blotong', $data);
	}

	public function download_analisa_penguapan($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaBrixPolAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_penguapan', $data);
	}

	public function download_analisa_cake($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaCakeAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_blotong', $data);
	}

	public function download_analisa_stroop($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaStroopAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_stroop', $data);
	}

	public function download_analisa_gula($id)
	{
		// Load Model 
		$this->load->model('Analisa_Model');
		
		// Retrieve Data
		$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaGulaAll($id);

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_gula', $data);
	}

	public function download_analisa_ketel($id)
	{
		$data['id'] = $id;

		// Load Model 
		$this->load->model('Analisa_Model');

		switch($id)
		{
			case 'jj' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelJJAll($id);
				break;
			case 'y1' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY1All($id);
				break;
			case 'y2' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY2All($id);
				break;
			case 'djj' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDJJAll($id);
				break;
			case 'dy' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDYAll($id);
				break;
			case 'wtp' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelWTPAll($id);
				break;
			case 'hw' : 
				$data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelHWAll($id);
				break;
		}

		// Render View and Data
		$this->load->view('analisa/download_analisa/analisa_ketel', $data);
	}

	/********************************************************************************* */
	
}
