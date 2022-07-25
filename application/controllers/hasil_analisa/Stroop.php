<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stroop extends CI_Controller {

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
		$data['page_title'] = 'Stroop';
		$data['sampel_stroop']	= array('Klare RS', 'R1 Mol', 'R2 Mol', 'Remelter A', 'Remelter CD', 'Stroop A', 'Stroop C', 'Klare D', 'Klare SHS', 'Tetes');
		$data['id']	= $this->id_sampel->getIDForStroop();

		for($i=0; $i < count($data['id']); $i++)
		{
			$data['hasil_analisa'][$i] = $this->analisa->getAnalisaStroopLatest5($data['id'][$i]);
			$data['url'][$i] = base_url('hasil_analisa/stroop/show/'.$data['id'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/stroop/main', $data);
		$this->load->view('static/footer');
	}

	public function show($id)
	{
		$data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDStroop($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaStroopAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/stroop/show', $data);
		$this->load->view('static/footer');
	}

	public function download($id)
	{
		$data['hasil_analisa'] = $this->analisa->getAnalisaStroopAll($id);
		$this->load->view('hasil_analisa/stroop/download', $data);
	}

}