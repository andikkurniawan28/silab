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

    public function edit_analisa_kadar_air_blotong($id, $kadar_air, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['kadar_air'] 	    = $kadar_air;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_analisa_kadar_air_blotong', $data);
      $this->load->view('static/footer');	

      $this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_kadar_air_cake($id, $kadar_air, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['kadar_air'] 	    = $kadar_air;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_analisa_kadar_air_cake', $data);
      $this->load->view('static/footer');	

      $this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_so2($id, $so2, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['so2'] 	          = $so2;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_analisa_so2', $data);
      $this->load->view('static/footer');	

      $this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_bjb($id, $bjb, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['bjb'] 	          = $bjb;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_analisa_bjb', $data);
      $this->load->view('static/footer');	

      $this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_hk_gula($id, $hk, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['hk'] 	          = $hk;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_hk_gula', $data);
      $this->load->view('static/footer');	

      $this->session->set_userdata('referrer_url', $this->agent->referrer() ); 
    }

    public function edit_analisa_tsai($id, $tsai, $bahan)
    {
      $data['page_title']     = "Edit Data";
      $data['id'] 		        = $id;
      $data['tsai'] 	        = $tsai;
      $data['bahan'] 		      = $bahan;

      $this->load->view('static/header', $data);
      $this->load->view('edit/edit_analisa_tsai', $data);
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

    public function proses_edit_kadar_air_blotong()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $kadar_air  = $this->input->post('kadar_air', TRUE);
        
        $this->Analisa_Model->editKadarAirBlotong($kadar_air, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Kadar Air berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_kadar_air_cake()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $kadar_air  = $this->input->post('kadar_air', TRUE);
        
        $this->Analisa_Model->editMoistureCake($kadar_air, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>Kadar Air berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_analisa_so2()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $so2        = $this->input->post('so2', TRUE);
        
        $this->Analisa_Model->editAnalisaSO2($so2, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>SO2 berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_analisa_bjb()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $bjb        = $this->input->post('bjb', TRUE);
        
        $this->Analisa_Model->editAnalisaBJB($bjb, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>BJB berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function proses_edit_hk_gula()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $hk         = $this->input->post('hk', TRUE);
        
        $this->Analisa_Model->editHKGula($hk, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>HK berhasil diubah.</div>");
        redirect($this->session->userdata('referrer_url'));
    }

    public function prosess_edit_analisa_tsai()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $tsai       = $this->input->post('tsai', TRUE);
        
        $this->Analisa_Model->editAnalisaTSAI($tsai, $bahan);
        $this->session->set_flashdata('message', "<div class='alert alert-warning' role='alert'>TSAI berhasil diubah.</div>");
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

    public function hapus_coloromat($id, $bahan)
    {
        $this->Analisa_Model->deleteColoromat($id);
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
