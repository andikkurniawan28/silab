<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('Analisa_Model');
        $this->load->library('user_agent');
    }

    public function check_login()
    {
      if($this->session->status != 'login')
        redirect(base_url('auth'));
    }

    /************************************************* */

    public function edit_analisa_npp($id, $brix, $pol)
    {
		$data['page_title'] = "Edit Data";
		$data['id'] 		  = $id;
		$data['brix'] 		= $brix;
		$data['pol'] 		  = $pol;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_npp', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_saccharomat($id, $brix, $pol, $bahan)
    {
		$data['page_title'] = "Edit Data";
		$data['id'] 		  = $id;
		$data['brix'] 		= $brix;
		$data['pol'] 		  = $pol;
		$data['bahan'] 		= $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_saccharomat', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_coloromat($id, $iu, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		        = $id;
		$data['iu'] 	          = $iu;
		$data['bahan'] 		      = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_coloromat', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_umum($id, $cao, $ph, $tur, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		        = $id;
		$data['cao'] 	          = $cao;
		$data['ph'] 	          = $ph;
		$data['tur'] 	          = $tur;
		$data['bahan'] 		      = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_analisa_umum', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_ampas($id, $pol_koreksi, $zk, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		        = $id;
		$data['pol_koreksi'] 	  = $pol_koreksi;
		$data['zk'] 		        = $zk;
		$data['bahan'] 		      = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_analisa_ampas', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_blotong($id, $Z, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		        = $id;
		$data['Z'] 	            = $Z;
		$data['bahan'] 		      = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_analisa_blotong', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_penguapan($id, $brix, $bahan)
    {
		$data['page_title']     = "Edit Data";
		$data['id'] 		        = $id;
		$data['brix'] 	        = $brix;
		$data['bahan'] 		      = $bahan;

		$this->load->view('static/header', $data);
		$this->load->view('edit/edit_penguapan', $data);
		$this->load->view('static/footer');	

		$this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    /********************************************************** */

    public function proses_edit_analisa_npp()
    {
        $id         = $this->input->post('id', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $rendemen   = $this->Analisa_Model->hitungRendemenNPP($brix, $pol);
        
        $this->Analisa_Model->editAnalisaNPP($id, $brix, $pol, $rendemen);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Brix, Pol berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_saccharomat()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $hk         = $this->Analisa_Model->hitungHKNonGula($brix, $pol);
        
        $this->Analisa_Model->editSaccharomat($id, $brix, $pol, $hk, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Brix, Pol berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_analisa_ampas()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $pol_koreksi= $this->input->post('pol_koreksi', TRUE);
        $zk         = $this->input->post('zk', TRUE);
        $kadar_air  = 100 - $zk;
        
        $this->Analisa_Model->editAnalisaAmpas($id, $pol_koreksi, $zk, $kadar_air, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Pol, Zat Kering berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_coloromat()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $iu         = $this->input->post('iu', TRUE);
        
        $this->Analisa_Model->editColoromat($iu, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>ICUMSA berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_analisa_umum()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $cao        = $this->input->post('cao', TRUE);
        $ph         = $this->input->post('ph', TRUE);
        $tur        = $this->input->post('tur', TRUE);
        
        $this->Analisa_Model->editAnalisaUmum($cao, $ph, $tur, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>CaO, pH, Turbidity berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_analisa_blotong()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $z          = $this->input->post('Z', TRUE);
        
        $this->Analisa_Model->editAnalisaBlotong($id, $z, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Pol berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_penguapan()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        
        $this->Analisa_Model->editPenguapan($id, $brix, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Brix berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    /****************************************************************************** */

    public function hapus_analisa_npp($id)
    {
        $this->Analisa_Model->deleteAnalisaNPP($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect($this->agent->referrer());
    }

    public function hapus_saccharomat($id, $bahan)
    {
        $this->Analisa_Model->deleteSaccharomat($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect($this->agent->referrer());
    }

    public function hapus_analisa_ampas($id, $bahan)
    {
        $this->Analisa_Model->deleteAnalisaAmpas($id);
        $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Data berhasil dihapus</div>");
        redirect($this->agent->referrer());
    }
    /************************************************************************************** */

}
