<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penguapan extends CI_Controller {

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
		$data['page_title'] = 'Penguapan';
		$data['sampel_penguapan'] = array('Pre-Evaporator', 'Evaporator 1', 'Evaporator 2', 'Evaporator 3', 'Evaporator 4', 'Evaporator 5');
		$data['id_penguapan'] = $this->id_sampel->getIDForPenguapan();

		for($i=0; $i < count($data['id_penguapan']); $i++)
		{
			$data['penguapan'][$i] = $this->analisa->getAnalisaBrixPolLatest5($data['id_penguapan'][$i]);
			$data['url_penguapan'][$i] = base_url('hasil_analisa/penguapan/show/'.$data['id_penguapan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/penguapan/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDPenguapan($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPolAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/penguapan/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPolAll($id);
		$this->load->view('hasil_analisa/penguapan/download', $data);
	}

}