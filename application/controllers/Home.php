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

	public function checkUserIsAdmin()
	{
		if($this->session->role != 'admin')
			redirect(base_url('auth'));
	}

	public function index()
	{
		$data['page_title'] = 'Home';
		$this->load->view('static/header', $data);
		$this->load->view('home/main');
		$this->load->view('static/footer');
	}

	public function show_hasil_analisa()
	{
		$data['page_title'] = 'Hasil Analisa';
		$data['card_title']	= array('Raw Sugar', 'Gilingan', 'Pemurnian', 'Penguapan', 'DRK', 'Masakan', 'Stroop', 'Gula', 'Tetes', 'Ketel', 'Request');
		$data['card_url'] = array(
			base_url('hasil_analisa/raw_sugar'),
			base_url('hasil_analisa/gilingan'),
			base_url('hasil_analisa/pemurnian'),
			base_url('hasil_analisa/penguapan'),
			base_url('hasil_analisa/drk'),
			base_url('hasil_analisa/masakan'),
			base_url('hasil_analisa/stroop'),
			base_url('hasil_analisa/gula'),
			base_url('hasil_analisa/tetes'),
			base_url('hasil_analisa/ketel'),
			base_url('hasil_analisa/request')
		);
		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/main', $data);
		$this->load->view('static/footer');
	}

	public function show_input_data()
	{
		$this->checkUserIsAdmin();
		$data['page_title'] = 'Input Data';

		$data['card_title']	= array(
			'Analisa NPP', 
			'Saccharomat', 
			'Coloromat', 
			'Moisture', 
			'Analisa Ampas', 
			'Analisa Umum', 
			'Analisa SO2', 
			'Analisa BJB',
			'Analisa TSAI',
			'Analisa HPLC',
			'Analisa Ketel',
			'Analisa Kapur',
			'Analisa Sabut',
			'Analisa PI',
			'Analisa Nira Kotor',
			'Data Keliling',
			'Data Timbangan',
			'Bahan Kimia',
		);

        $data['url'] = array(
			'input_data/analisa_npp',
			'input_data/saccharomat',
			'input_data/coloromat',
			'input_data/moisture',
			'input_data/analisa_ampas',
			'input_data/analisa_umum',
			'input_data/analisa_so2',
			'input_data/analisa_bjb',
			'input_data/analisa_tsai',
			'input_data/analisa_hplc',
			'input_data/analisa_ketel',
			'input_data/analisa_kapur',
			'input_data/analisa_sabut',
			'input_data/analisa_pi',
			'input_data/analisa_nira_kotor',
			'input_data/data_keliling',
			'input_data/data_timbangan',
			'input_data/data_bahankimia',
		);
		$this->load->view('static/header', $data);
		$this->load->view('input_data/main', $data);
		$this->load->view('static/footer');
	}

	public function show_monitoring()
	{
		$data['page_title'] = 'Monitoring';
		$data['card_title']	= array('Timbangan RS In', 'Timbangan RS Out', 'Timbangan Tetes', 'Taksasi Volume', 'Imbibisi');
		$data['card_url'] = array(
			base_url('monitoring/timbangan_rs_in_report'),
			base_url('monitoring/timbangan_rs_out_report'),
			base_url('monitoring/timbangan_tetes_report'),
			base_url('monitoring/taksasi_volume'),
			base_url('monitoring/imbibisi_control'),
		);
		$this->load->view('static/header', $data);
		$this->load->view('monitoring/main', $data);
		$this->load->view('static/footer');
	}

}