<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('Analisa_Model');
    }

	public function check_login()
	{
		if($this->session->status != 'login')
			redirect(base_url('auth'));
	}

    public function edit_analisa_npp($id, $brix, $pol)
    {
		$data['page_title'] = "Edit Data";
		$data['id'] 		= $id;
		$data['brix'] 		= $brix;
		$data['pol'] 		= $pol;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_npp', $data);
		$this->load->view('static/footer');	
    }

    public function proses_edit_analisa_npp()
    {
        $id         = $this->input->post('id', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $rendemen   = $this->Analisa_Model->hitungRendemenNPP($brix, $pol);
        
        $this->Analisa_Model->editAnalisaNPP($id, $brix, $pol, $rendemen);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Data berhasil diubah</div>");
        redirect(base_url('welcome/show_analisa_npp/NPP'));
    }

    public function hapus_analisa_npp($id)
    {
        $this->Analisa_Model->deleteAnalisaNPP($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect(base_url('welcome/show_analisa_npp/NPP'));
    }

}
