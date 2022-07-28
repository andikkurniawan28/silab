<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_umum_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_umum');
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
        $data['page_title'] = "Analisa Umum";
        $data['hasil_analisa'] = $this->analisa_umum->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_umum_control/create_analisa_umum/');
        $data['form_handler_update'] = base_url('input_data/analisa_umum_control/edit_analisa_umum/');
        $data['form_handler_delete'] = base_url('input_data/analisa_umum_control/delete_analisa_umum/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_umum/main',$data);
		$this->load->view('input_data/analisa_umum/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_umum($id, $bahan, $cao, $ph, $tur)
    {
        $data['page_title'] = "Analisa Umum";
        $data['form_handler_update'] = base_url('input_data/analisa_umum_control/update_analisa_umum/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['cao'] = $cao;
        $data['ph'] = $ph;
        $data['tur'] = $tur;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_umum/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_umum()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $cao = $this->input->post('cao', TRUE);
        $ph = $this->input->post('ph', TRUE);
        $tur = $this->input->post('tur', TRUE);

        $this->analisa_umum->createData($bahan, $cao, $ph, $tur);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_umum_control'));
    }

    public function update_analisa_umum()
    {
        $id = $this->input->post('id', TRUE);
        $bahan = $this->input->post('bahan', TRUE);
        $cao = $this->input->post('cao', TRUE);
        $ph = $this->input->post('ph', TRUE);
        $tur = $this->input->post('tur', TRUE);

        $this->analisa_umum->updateData($id, $bahan, $cao, $ph, $tur);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_umum_control'));
    }

    public function delete_analisa_umum($id)
    {        
        $this->analisa_umum->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_umum_control'));
    }
}
