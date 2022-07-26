<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drk extends CI_Controller {

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
		$data['page_title'] = 'DRK';
		$data['sampel_drk'] = array('Remelter In', 'Reaction Tank', 'Carbonated Liquor', 'Clear Liquor');
		$data['sampel_cake'] = array('Filter Cake Head', 'Filter Cake Mid', 'Filter Cake End');
		$data['id_drk'] = $this->id_sampel->getIDForDRK();
		$data['id_cake'] = $this->id_sampel->getIDForCake();
		
		for($i=0; $i < count($data['id_drk']); $i++)
		{
			$data['drk'][$i] = $this->analisa->getAnalisaPemurnianLatest5($data['id_drk'][$i]);
			$data['url_drk'][$i] = base_url('hasil_analisa/drk/show_analisa_drk/'.$data['id_drk'][$i]);
		}
		for($i=0; $i < count($data['id_cake']); $i++)
		{
			$data['cake'][$i] = $this->analisa->getAnalisaCakeLatest5($data['id_cake'][$i]);
			$data['url_cake'][$i] = base_url('hasil_analisa/drk/show_analisa_cake/'.$data['id_cake'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/drk/main', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_drk($id)
	{
        $data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyID($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaPemurnianAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/drk/analisa_drk/show', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_cake($id)
	{
        $data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyID($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaCakeAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/drk/analisa_cake/show', $data);
		$this->load->view('static/footer');
	}

    public function download_analisa_drk($id)
    {
		$data['hasil_analisa'] = $this->analisa->getAnalisaPemurnianAll($id);
		$this->load->view('hasil_analisa/drk/analisa_drk/download', $data);
    }

    public function download_analisa_cake($id)
    {
		$data['hasil_analisa'] = $this->analisa->getAnalisaCakeAll($id);
		$this->load->view('hasil_analisa/drk/analisa_cake/download', $data);
    }

}
