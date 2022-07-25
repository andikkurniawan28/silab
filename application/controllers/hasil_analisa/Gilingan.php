<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gilingan extends CI_Controller {

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
		$data['page_title'] = 'Gilingan';
		$data['sampel_ng'] = array('Nira Perahan Pertama', 'Nira Gilingan 2', 'Nira Gilingan 3', 'Nira Gilingan 4', 'Nira Gilingan 5');
		$data['sampel_ag'] = array('Ampas Gilingan 1', 'Ampas Gilingan 2', 'Ampas Gilingan 3', 'Ampas Gilingan 4', 'Ampas Gilingan 5');
		$data['id_nira_gilingan'] = $this->id_sampel->getIDForGilingan();
		$data['id_ampas_gilingan'] = $this->id_sampel->getIDForAmpasGilingan();
		$data['nira_gilingan'][0] = $this->analisa->getAnalisaNppLatest5();
		$data['url_nira_gilingan'][0] = base_url('hasil_analisa/gilingan/show_analisa_npp');
		
		for($i=0; $i < count($data['id_nira_gilingan']); $i++)
		{
			$data['nira_gilingan'][$i+1] = $this->analisa->getAnalisaBrixPolLatest5($data['id_nira_gilingan'][$i]);
			$data['url_nira_gilingan'][$i+1] = base_url('hasil_analisa/gilingan/show_analisa_gilingan/'.$data['id_nira_gilingan'][$i]);
		}

		for($i=0; $i < count($data['id_ampas_gilingan']); $i++)
		{
			$data['ampas_gilingan'][$i] = $this->analisa->getAnalisaAmpasLatest5($data['id_ampas_gilingan'][$i]);
			$data['url_ampas_gilingan'][$i] = base_url('hasil_analisa/gilingan/show_analisa_ampas/'.$data['id_ampas_gilingan'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gilingan/main', $data);
		$this->load->view('static/footer');
	}

    public function show_analisa_npp()
    {
		$data['page_title'] = 'Nira Perahan Pertama';
		$data['hasil_analisa'] = $this->analisa->getAnalisaNppAll();

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gilingan/analisa_npp/show', $data);
		$this->load->view('static/footer');
    }

	public function show_analisa_gilingan($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDGilingan($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPolAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gilingan/analisa_gilingan/show', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_ampas($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDAmpas($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaAmpasAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gilingan/analisa_ampas/show', $data);
		$this->load->view('static/footer');
	}

	public function download_analisa_npp()
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaNPPAll();
		$this->load->view('hasil_analisa/gilingan/analisa_npp/download', $data);
	}

	public function download_analisa_gilingan($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaBrixPollAll($id);
		$this->load->view('hasil_analisa/gilingan/analisa_gilingan/download', $data);
	}

	public function download_analisa_ampas($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaAmpasAll($id);
		$this->load->view('hasil_analisa/gilingan/analisa_ampas/download', $data);
	}

}