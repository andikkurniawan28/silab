<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masakan extends CI_Controller {

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
		$data['page_title'] = 'Masakan';
		$data['sampel_masakan']	= array('Masakan A','Masakan A Raw','Masakan C','Masakan D','Masakan R1','Masakan R2');
		$data['id']	= $this->id_sampel->getIDForMasakan();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] = $this->analisa->getAnalisaStroopLatest5($data['id'][$i]);
			$data['url'][$i] = base_url('hasil_analisa/masakan/show/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/masakan/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDMasakan($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaStroopAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/masakan/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaStroopAll($id);
		$this->load->view('hasil_analisa/masakan/download', $data);
	}

}