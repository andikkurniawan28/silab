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
			'hasil_analisa/raw_sugar', 'hasil_analisa/gilingan', 
			'hasil_analisa/pemurnian', 'hasil_analisa/penguapan', 
			'hasil_analisa/drk', 'hasil_analisa/masakan', 
			'hasil_analisa/stroop', 'hasil_analisa/gula', 
			'hasil_analisa/tetes', 'hasil_analisa/ketel',
		);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/main', $data);
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
			$data['url_ampas_gilingan'][$i]		= base_url('hasil_analisa/analisa_ampas/'.$data['id_ampas_gilingan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_gilingan', $data);
		$this->load->view('static/footer');
	}

	public function analisa_npp()
	{
		$title 				= 'hasil_analisa';
		$data['page_title'] = 'Nira Perahan Pertama';

		$data['hasil_analisa'] = $this->analisa->getAnalisaNppAll();

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_npp', $data);
		$this->load->view('static/footer');
	}

	public function analisa_gilingan($id)
	{
		$title 					= 'hasil_analisa';
		$data['page_id']		= $id;
		$data['page_title'] 	= $this->id_sampel->identifyIDGilingan($id);

		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPolAll($id);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_gilingan', $data);
		$this->load->view('static/footer');
	}

	public function pemurnian()
	{
		$title = 'hasil_analisa';

		$data['page_title'] 			= 'Pemurnian';
		$data['sampel_pemurnian']		= array('Nira Mentah', 'Nira Mentah Sulfitasi', 'Nira Encer', 'Nira Tapis', 'Nira Kental', 'Nira Kental Sulfitasi');
		$data['sampel_blotong']			= array('Blotong Truk Timur', 'Blotong Truk Barat', 'Blotong RVF 1', 'Blotong RVF 2', 'Blotong RVF 3', 'Blotong RVF 4', 'Blotong Request');
		$data['id_pemurnian']			= $this->id_sampel->getIDForNiraPemurnian();
		$data['id_blotong']				= $this->id_sampel->getIDForBlotong();
		
		for($i=0; $i < count($data['id_pemurnian']); $i++)
		{
			$data['nira_pemurnian'][$i]  	= $this->analisa->getAnalisaPemurnianLatest5($data['id_pemurnian'][$i]);
			$data['url_nira_pemurnian'][$i] = base_url('hasil_analisa/analisa_pemurnian/'.$data['id_pemurnian'][$i]);
		}
		for($i=0; $i < count($data['id_blotong']); $i++)
		{
			$data['blotong'][$i] 		= $this->analisa->getAnalisaBlotongLatest5($data['id_blotong'][$i]);
			$data['url_blotong'][$i]	= base_url('hasil_analisa/analisa_blotong/'.$data['id_blotong'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_pemurnian', $data);
		$this->load->view('static/footer');
	}

	public function drk()
	{
		$title = 'hasil_analisa';

		$data['page_title'] 			= 'DRK';
		$data['sampel_drk']				= array('Remelter In', 'Reaction Tank', 'Carbonated Liquor', 'Clear Liquor');
		$data['sampel_cake']			= array('Filter Cake Head', 'Filter Cake Mid', 'Filter Cake End');
		$data['id_drk']					= $this->id_sampel->getIDForDRK();
		$data['id_cake']				= $this->id_sampel->getIDForCake();
		
		for($i=0; $i < count($data['id_drk']); $i++)
		{
			$data['drk'][$i]  			= $this->analisa->getAnalisaPemurnianLatest5($data['id_drk'][$i]);
			$data['url_drk'][$i]		= base_url('hasil_analisa/analisa_pemurnian/'.$data['id_drk'][$i]);
		}
		for($i=0; $i < count($data['id_cake']); $i++)
		{
			$data['cake'][$i] 			= $this->analisa->getAnalisaCakeLatest5($data['id_cake'][$i]);
			$data['url_cake'][$i]		= base_url('hasil_analisa/analisa_cake/'.$data['id_cake'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_drk', $data);
		$this->load->view('static/footer');
	}

	public function penguapan()
	{
		$title = 'hasil_analisa';

		$data['page_title'] 			= 'Penguapan';
		$data['sampel_penguapan']		= array('Pre-Evaporator', 'Evap1', 'Evap2', 'Evap3', 'Evap4', 'Evap5');
		$data['id_penguapan']			= $this->id_sampel->getIDForPenguapan();

		for($i=0; $i < count($data['id_penguapan']); $i++)
		{
			$data['penguapan'][$i]  	= $this->analisa->getAnalisaBrixPolLatest5($data['id_penguapan'][$i]);
			$data['url_penguapan'][$i] = base_url('hasil_analisa/analisa_penguapan/'.$data['id_penguapan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_penguapan', $data);
		$this->load->view('static/footer');
	}

	public function masakan()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Masakan';
		$data['sampel_masakan']	= array('Masakan A','Masakan A Raw','Masakan C','Masakan D','Masakan R1','Masakan R2');
		$data['id_masakan']		= $this->id_sampel->getIDForMasakan();

		for($i=0; $i < count($data['id_masakan']); $i++)
		{
			$data['masakan'][$i] 		= $this->analisa->getAnalisaStroopLatest5($data['id_masakan'][$i]);
			$data['url_masakan'][$i] 	= base_url('hasil_analisa/analisa_stroop/'.$data['id_masakan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_masakan', $data);
		$this->load->view('static/footer');
	}

	public function stroop()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Stroop';
		$data['sampel_stroop']	= array('Klare RS', 'R1 Mol', 'R2 Mol', 'Remelter A', 'Remelter CD', 'Stroop A', 'Stroop C', 'Klare D', 'Klare SHS', 'Tetes');
		$data['id_stroop']		= $this->id_sampel->getIDForStroop();

		for($i=0; $i < count($data['id_stroop']); $i++)
		{
			$data['stroop'][$i] 		= $this->analisa->getAnalisaStroopLatest5($data['id_stroop'][$i]);
			$data['url_stroop'][$i] 	= base_url('hasil_analisa/analisa_stroop/'.$data['id_stroop'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_stroop', $data);
		$this->load->view('static/footer');
	}

	public function tetes()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Tetes';
		$data['sampel_tetes']	= array('Tetes Tangki 1', 'Tetes Tangki 2', 'Tetes Tangki 3', 'Tetes Kumpulan', 'Tetes Tandon');
		$data['id_tetes']		= $this->id_sampel->getIDForTetes();

		for($i=0; $i < count($data['id_tetes']); $i++)
		{
			$data['tetes'][$i] 		= $this->analisa->getAnalisaTetesLatest5($data['id_tetes'][$i]);
			$data['url_tetes'][$i] 	= base_url('hasil_analisa/analisa_tetes/'.$data['id_tetes'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/analisa_tetes', $data);
		$this->load->view('static/footer');
	}

	public function ketel()
	{
		$title = 'hasil_analisa';
		
		$data['page_title'] 	= 'Ketel';
		$data['sampel_tetes']	= array('JJ', 'Y1', 'Y2', 'DJJ', 'DY', 'WTP', 'HW');

		$data['ketel']['jj']				= $this->analisa->getAnalisaKetelJJLatest5();
		$data['ketel']['y1']				= $this->analisa->getAnalisaKetelY1Latest5();
		$data['ketel']['y2']				= $this->analisa->getAnalisaKetelY2Latest5();
		$data['ketel']['djj']				= $this->analisa->getAnalisaKetelDJJLatest5();
		$data['ketel']['dy']				= $this->analisa->getAnalisaKetelDYLatest5();
		$data['ketel']['wtp']				= $this->analisa->getAnalisaKetelWTPLatest5();
		$data['ketel']['hw']				= $this->analisa->getAnalisaKetelHWLatest5();

		$this->load->view('static/header', $data);
		$this->load->view($title.'/mode/ketel', $data);
		$this->load->view('static/footer');
	}

	public function analisa_ampas($id)
	{
		$title 				= 'hasil_analisa';
		$data['page_title'] = 'Analisa Ampas';

		$data['hasil_analisa'] = $this->analisa->getAnalisaAmpasAll($id);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_ampas', $data);
		$this->load->view('static/footer');
	}

	public function analisa_pemurnian($id)
	{
		$title 				= 'hasil_analisa';
		$data['page_title'] = 'Analisa Pemurnian';

		$data['hasil_analisa'] = $this->analisa->getAnalisaPemurnianAll($id);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_pemurnian', $data);
		$this->load->view('static/footer');
	}

	public function analisa_stroop($id)
	{
		$title 				= 'hasil_analisa';
		$data['page_title'] = 'Analisa Masakan & Stroop';

		$data['hasil_analisa'] = $this->analisa->getAnalisaStroopAll($id);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_stroop', $data);
		$this->load->view('static/footer');
	}

	public function analisa_penguapan($id)
	{
		$title 				= 'hasil_analisa';
		$data['page_title'] = 'Analisa Penguapan';

		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPolAll($id);

		$this->load->view('static/header', $data);
		$this->load->view($title.'/show_analisa/analisa_penguapan', $data);
		$this->load->view('static/footer');
	}

}