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

    public function edit_analisa_gilingan($id, $brix, $pol, $bahan)
    {
		$data['page_title'] = "Edit Data";
		$data['id'] 		= $id;
		$data['brix'] 		= $brix;
		$data['pol'] 		= $pol;
		$data['bahan'] 		= $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_gilingan', $data);
		$this->load->view('static/footer');	
    }

    public function proses_edit_analisa_gilingan()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $hk         = $this->Analisa_Model->hitungHKNonGula($brix, $pol);
        $kode       = substr($bahan,0,2);
        
        switch($kode)
        {
            case 13 : $material = "NG2"; break;
            case 14 : $material = "NG3"; break;
            case 15 : $material = "NG4"; break;
            case 16 : $material = "NG5"; break;
        }
        
        $this->Analisa_Model->editAnalisaGilingan($id, $brix, $pol, $hk);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Data berhasil diubah</div>");
        redirect(base_url('welcome/show_analisa_gilingan/'.$kode.'/'.$material));
    }

    public function hapus_analisa_gilingan($id, $bahan)
    {
        $kode       = substr($bahan,0,2);
        
        switch($kode)
        {
            case 13 : $material = "NG2"; break;
            case 14 : $material = "NG3"; break;
            case 15 : $material = "NG4"; break;
            case 16 : $material = "NG5"; break;
        }

        $this->Analisa_Model->deleteSaccharomat($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect(base_url('welcome/show_analisa_gilingan/'.$kode.'/'.$material));
    }

    public function edit_analisa_ampas($id, $pol_koreksi, $zk, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		    = $id;
		$data['pol_koreksi'] 	= $pol_koreksi;
		$data['zk'] 		    = $zk;
		$data['bahan'] 		    = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_ampas', $data);
		$this->load->view('static/footer');	
    }

    public function proses_edit_analisa_ampas()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $pol_koreksi= $this->input->post('pol_koreksi', TRUE);
        $zk         = $this->input->post('zk', TRUE);
        $kadar_air  = 100 - $zk;
        $kode       = substr($bahan,0,2);
        
        switch($kode)
        {
            case 26 : $material = "AG1"; break;
            case 27 : $material = "AG2"; break;
            case 28 : $material = "AG3"; break;
            case 29 : $material = "AG4"; break;
            case 30 : $material = "AG5"; break;
        }
        
        $this->Analisa_Model->editAnalisaAmpas($id, $pol_koreksi, $zk, $kadar_air);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Data berhasil diubah</div>");
        redirect(base_url('welcome/show_analisa_ampas_gilingan/'.$kode.'/'.$material));
    }

    public function hapus_analisa_ampas($id, $bahan)
    {
        $kode       = substr($bahan,0,2);
        
        switch($kode)
        {
            case 26 : $material = "AG1"; break;
            case 27 : $material = "AG2"; break;
            case 28 : $material = "AG3"; break;
            case 29 : $material = "AG4"; break;
            case 30 : $material = "AG5"; break;
        }

        $this->Analisa_Model->deleteAnalisaAmpas($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect(base_url('welcome/show_analisa_ampas_gilingan/'.$kode.'/'.$material));
    }

}
