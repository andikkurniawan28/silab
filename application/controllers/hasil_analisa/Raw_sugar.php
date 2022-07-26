<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raw_sugar extends CI_Controller {

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
		$data['page_title'] = 'Raw Sugar';
		$data['sampel']	= array('Raw Sugar Kedatangan', 'Raw Sugar Silo');
		$data['id']	= $this->id_sampel->getIDForRS();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] = $this->analisa->getAnalisaGulaLatest5($data['id'][$i]);
			$data['url'][$i] = base_url('hasil_analisa/raw_sugar/show/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/raw_sugar/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyID($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaGulaAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/raw_sugar/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaGulaAll($id);
		$this->load->view('hasil_analisa/raw_sugar/download', $data);
	}

}
