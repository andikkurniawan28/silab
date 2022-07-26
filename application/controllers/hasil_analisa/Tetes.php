<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tetes extends CI_Controller {

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
		$data['page_title'] = 'Tetes';
		$data['sampel']	= array('Tetes Tangki 1', 'Tetes Tangki 2', 'Tetes Tangki 3', 'Tetes Kumpulan', 'Tetes Tandon');
		$data['id']	= $this->id_sampel->getIDForTetes();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] = $this->analisa->getAnalisaTetesLatest5($data['id'][$i]);
			$data['url'][$i] = base_url('hasil_analisa/tetes/show/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/tetes/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyID($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaTetesAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/tetes/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaTetesAll($id);
		$this->load->view('hasil_analisa/tetes/download', $data);
	}

}