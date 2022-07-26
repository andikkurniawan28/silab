<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketel extends CI_Controller {

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
		$data['page_title'] = 'Ketel';
		$data['ketel']['jj'] = $this->analisa->getAnalisaKetelJJLatest5();
		$data['ketel']['y1'] = $this->analisa->getAnalisaKetelY1Latest5();
		$data['ketel']['y2'] = $this->analisa->getAnalisaKetelY2Latest5();
		$data['ketel']['djj'] = $this->analisa->getAnalisaKetelDJJLatest5();
		$data['ketel']['dy'] = $this->analisa->getAnalisaKetelDYLatest5();
		$data['ketel']['wtp'] = $this->analisa->getAnalisaKetelWTPLatest5();
		$data['ketel']['hw'] = $this->analisa->getAnalisaKetelHWLatest5();

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/ketel/main', $data);
		$this->load->view('static/footer');
	}

    public function show($id)
	{
		$data['page_title'] = ucfirst($id);
		$data['id'] = $id;
		switch($id)
		{
			case 'jj' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelJJAll($id); break;
			case 'y1' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelY1All($id); break;
			case 'y2' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelY2All($id); break;
			case 'djj' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelDJJAll($id); break;
			case 'dy' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelDYAll($id); break;
			case 'wtp' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelWTPAll($id); break;
			case 'hw' : $data['hasil_analisa'] = $this->analisa->getAnalisaKetelHWAll($id);break;
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/ketel/show', $data);
		$this->load->view('static/footer');
    }
    
	public function download($id)
	{
		$data['id'] = $id;
		switch($id)
		{
			case 'jj' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelJJAll($id); break;
			case 'y1' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY1All($id); break;
			case 'y2' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelY2All($id); break;
			case 'djj' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDJJAll($id); break;
			case 'dy' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelDYAll($id); break;
			case 'wtp' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelWTPAll($id); break;
			case 'hw' : $data['hasil_analisa'] = $this->Analisa_Model->getAnalisaKetelHWAll($id); break;
		}
		$this->load->view('hasil_analisa/ketel/download', $data);
	}

}