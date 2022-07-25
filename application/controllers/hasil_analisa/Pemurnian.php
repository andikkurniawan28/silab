<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemurnian extends CI_Controller {

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
		$data['page_title'] = 'Pemurnian';
		$data['sampel_pemurnian'] = array('Nira Mentah', 'Nira Mentah Sulfitasi', 'Nira Encer', 'Nira Tapis', 'Nira Kental', 'Nira Kental Sulfitasi');
		$data['sampel_blotong']	= array('Blotong Truk Timur', 'Blotong Truk Barat', 'Blotong RVF 1', 'Blotong RVF 2', 'Blotong RVF 3', 'Blotong RVF 4', 'Blotong Request');
		$data['id_pemurnian'] = $this->id_sampel->getIDForNiraPemurnian();
		$data['id_blotong']	= $this->id_sampel->getIDForBlotong();
		
		for($i=0; $i < count($data['id_pemurnian']); $i++)
		{
			$data['nira_pemurnian'][$i] = $this->analisa->getAnalisaPemurnianLatest5($data['id_pemurnian'][$i]);
			$data['url_nira_pemurnian'][$i] = base_url('hasil_analisa/pemurnian/show_analisa_pemurnian/'.$data['id_pemurnian'][$i]);
		}
		for($i=0; $i < count($data['id_blotong']); $i++)
		{
			$data['blotong'][$i] = $this->analisa->getAnalisaBlotongLatest5($data['id_blotong'][$i]);
			$data['url_blotong'][$i] = base_url('hasil_analisa/pemurnian/show_analisa_blotong/'.$data['id_blotong'][$i]);
		}

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/pemurnian/main', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_pemurnian($id)
	{
        $data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDPemurnian($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaPemurnianAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/pemurnian/analisa_pemurnian/show', $data);
		$this->load->view('static/footer');
	}

	public function show_analisa_blotong($id)
	{
        $data['page_id'] = $id;
		$data['page_title'] = $this->id_sampel->identifyIDBlotong($id);
		$data['hasil_analisa'] = $this->analisa->getAnalisaBlotongAll($id);

		$this->load->view('static/header', $data);
		$this->load->view('hasil_analisa/pemurnian/analisa_blotong/show', $data);
		$this->load->view('static/footer');
	}

}
