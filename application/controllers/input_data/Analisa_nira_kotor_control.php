<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_nira_kotor_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_nira_kotor');
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
        $data['page_title'] = ucfirst("Analisa Nira Kotor");
        $data['hasil_analisa'] = $this->analisa_nira_kotor->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_nira_kotor_control/create_analisa_nira_kotor/');
        $data['form_handler_update'] = base_url('input_data/analisa_nira_kotor_control/edit_analisa_nira_kotor/');
        $data['form_handler_delete'] = base_url('input_data/analisa_nira_kotor_control/delete_analisa_nira_kotor/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_nira_kotor/main',$data);
		$this->load->view('input_data/analisa_nira_kotor/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_nira_kotor($id, $ph, $brix, $suhu)
    {
        $data['page_title'] = ucfirst("Analisa Nira Kotor");
        $data['form_handler_update'] = base_url('input_data/analisa_nira_kotor_control/update_analisa_nira_kotor/');
        $data['id'] = $id;
        $data['ph'] = $ph;
        $data['brix'] = $brix;
        $data['suhu'] = $suhu;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_nira_kotor/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_nira_kotor()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $ph = $this->input->post('ph', TRUE);
        $brix = $this->input->post('brix', TRUE);
        $suhu = $this->input->post('suhu', TRUE);

        $this->analisa_nira_kotor->createData($ph, $brix, $suhu);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_nira_kotor_control'));
    }

    public function update_analisa_nira_kotor()
    {
        $id = $this->input->post('id', TRUE);
        $ph = $this->input->post('ph', TRUE);
        $brix = $this->input->post('brix', TRUE);
        $suhu = $this->input->post('suhu', TRUE);

        $this->analisa_nira_kotor->updateData($id, $ph, $brix, $suhu);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_nira_kotor_control'));
    }

    public function delete_analisa_nira_kotor($id)
    {   
        $this->analisa_nira_kotor->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_nira_kotor_control'));
    }
}
