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