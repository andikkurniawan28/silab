<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gula extends CI_Controller {

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
		$data['page_title'] = 'Gula in Proses';
		$data['sampel']	= array('Gula R1', 'Gula R2', 'Gula A Raw', 'Gula RS', 'Gula C', 'Gula D1', 'Gula D2', 'Gula SHS');
		$data['id']	= $this->id_sampel->getIDForGula();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] = $this->analisa->getAnalisaGulaLatest5($data['id'][$i]);
			$data['url'][$i] = base_url('hasil_analisa/gula/show/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gula/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDGula($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaGulaAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/gula/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaGulaAll($id);
		$this->load->view('hasil_analisa/gula/download', $data);
	}

}
