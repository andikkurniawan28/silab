<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_ketel_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_ketel');
    }

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
		redirect(base_url('auth'));
	}

	public function checkUserIsAdmin()
	{
		if($this->session->role != 'admin')
		redirect(base_url('auth'));
	}

	public function index()
	{
        $data['page_title'] = ucfirst("Analisa Ketel");
        $data['hasil_analisa'] = $this->analisa_ketel->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_ketel_control/create_analisa_ketel/');
        $data['form_handler_update'] = base_url('input_data/analisa_ketel_control/edit_analisa_ketel/');
        $data['form_handler_delete'] = base_url('input_data/analisa_ketel_control/delete_analisa_ketel/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_ketel/main',$data);
		$this->load->view('input_data/analisa_ketel/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_ketel($id, $sadah_jj, $tds_jj, $ph_jj, $phospat_jj, $tds_djj, $ph_djj, 
        $sadah_y1, $tds_y1, $ph_y1, $phospat_y1, $sadah_y2, $tds_y2, $ph_y2, $phospat_y2, $tds_dy, $ph_dy,
        $sadah_hw, $tds_hw, $ph_hw, $sadah_wtp, $tds_wtp, $ph_wtp, $volume_tangki1, $volume_tangki2)
    {
        $data['page_title'] = ucfirst("Analisa Ketel");
        $data['form_handler_update'] = base_url('input_data/analisa_ketel_control/update_analisa_ketel/');
        $data['id'] = $id;
        $data['sadah_jj'] = $sadah_jj;
        $data['tds_jj'] = $tds_jj;
        $data['ph_jj'] = $ph_jj;
        $data['phospat_jj'] = $phospat_jj;
        $data['tds_djj'] = $tds_djj;
        $data['ph_djj'] = $ph_djj;
        $data['sadah_y1'] = $sadah_y1;
        $data['tds_y1'] = $tds_y1;
        $data['ph_y1'] = $ph_y1;
        $data['phospat_y1'] = $phospat_y1;
        $data['sadah_y2'] = $sadah_y2;
        $data['tds_y2'] = $tds_y2;
        $data['ph_y2'] = $ph_y2;
        $data['phospat_y2'] = $phospat_y2;
        $data['tds_dy'] = $tds_dy;
        $data['ph_dy'] = $ph_dy;
        $data['sadah_hw'] = $sadah_hw;
        $data['tds_hw'] = $tds_hw;
        $data['ph_hw'] = $ph_hw;
        $data['sadah_wtp'] = $sadah_wtp;
        $data['tds_wtp'] = $tds_wtp;
        $data['ph_wtp'] = $ph_wtp;
        $data['volume_tangki1'] = $volume_tangki1;
        $data['volume_tangki2'] = $volume_tangki2;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_ketel/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_ketel()
    {
        $sadah_jj = $this->input->post('sadah_jj', TRUE);
        $tds_jj = $this->input->post('tds_jj', TRUE);
        $ph_jj = $this->input->post('ph_jj', TRUE);
        $phospat_jj = $this->input->post('phospat_jj', TRUE);
        $tds_djj = $this->input->post('tds_djj', TRUE);
        $ph_djj = $this->input->post('ph_djj', TRUE);
        $sadah_y1 = $this->input->post('sadah_y1', TRUE);
        $tds_y1 = $this->input->post('tds_y1', TRUE);
        $ph_y1 = $this->input->post('ph_y1', TRUE);
        $phospat_y1 = $this->input->post('phospat_y1', TRUE);
        $sadah_y2 = $this->input->post('sadah_y2', TRUE);
        $tds_y2 = $this->input->post('tds_y2', TRUE);
        $ph_y2 = $this->input->post('ph_y2', TRUE);
        $phospat_y2 = $this->input->post('phospat_y2', TRUE);
        $tds_dy = $this->input->post('tds_dy', TRUE);
        $ph_dy = $this->input->post('ph_dy', TRUE);
        $sadah_hw = $this->input->post('sadah_hw', TRUE);
        $tds_hw = $this->input->post('tds_hw', TRUE);
        $ph_hw = $this->input->post('ph_hw', TRUE);
        $sadah_wtp = $this->input->post('sadah_wtp', TRUE);
        $tds_wtp = $this->input->post('tds_wtp', TRUE);
        $ph_wtp = $this->input->post('ph_wtp', TRUE);
        $volume_tangki1 = $this->input->post('volume_tangki1', TRUE);
        $volume_tangki2 = $this->input->post('volume_tangki2', TRUE);

        $this->analisa_ketel->createData($sadah_jj, $tds_jj, $ph_jj, $phospat_jj, $tds_djj, $ph_djj, 
        $sadah_y1, $tds_y1, $ph_y1, $phospat_y1, $sadah_y2, $tds_y2, $ph_y2, $phospat_y2, $tds_dy, $ph_dy,
        $sadah_hw, $tds_hw, $ph_hw, $sadah_wtp, $tds_wtp, $ph_wtp, $volume_tangki1, $volume_tangki2);

        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_ketel_control'));
    }

    public function update_analisa_ketel()
    {
        $id = $this->input->post('id', TRUE);
        $sadah_jj = $this->input->post('sadah_jj', TRUE);
        $tds_jj = $this->input->post('tds_jj', TRUE);
        $ph_jj = $this->input->post('ph_jj', TRUE);
        $phospat_jj = $this->input->post('phospat_jj', TRUE);
        $tds_djj = $this->input->post('tds_djj', TRUE);
        $ph_djj = $this->input->post('ph_djj', TRUE);
        $sadah_y1 = $this->input->post('sadah_y1', TRUE);
        $tds_y1 = $this->input->post('tds_y1', TRUE);
        $ph_y1 = $this->input->post('ph_y1', TRUE);
        $phospat_y1 = $this->input->post('phospat_y1', TRUE);
        $sadah_y2 = $this->input->post('sadah_y2', TRUE);
        $tds_y2 = $this->input->post('tds_y2', TRUE);
        $ph_y2 = $this->input->post('ph_y2', TRUE);
        $phospat_y2 = $this->input->post('phospat_y2', TRUE);
        $tds_dy = $this->input->post('tds_dy', TRUE);
        $ph_dy = $this->input->post('ph_dy', TRUE);
        $sadah_hw = $this->input->post('sadah_hw', TRUE);
        $tds_hw = $this->input->post('tds_hw', TRUE);
        $ph_hw = $this->input->post('ph_hw', TRUE);
        $sadah_wtp = $this->input->post('sadah_wtp', TRUE);
        $tds_wtp = $this->input->post('tds_wtp', TRUE);
        $ph_wtp = $this->input->post('ph_wtp', TRUE);
        $volume_tangki1 = $this->input->post('volume_tangki1', TRUE);
        $volume_tangki2 = $this->input->post('volume_tangki2', TRUE);

        $this->analisa_ketel->updateData($id, $sadah_jj, $tds_jj, $ph_jj, $phospat_jj, $tds_djj, $ph_djj, 
            $sadah_y1, $tds_y1, $ph_y1, $phospat_y1, $sadah_y2, $tds_y2, $ph_y2, $phospat_y2, $tds_dy, $ph_dy,
            $sadah_hw, $tds_hw, $ph_hw, $sadah_wtp, $tds_wtp, $ph_wtp, $volume_tangki1, $volume_tangki2);

        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_ketel_control'));
    }

    public function delete_analisa_ketel($id)
    {   
        $this->analisa_ketel->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_ketel_control'));
    }
}
