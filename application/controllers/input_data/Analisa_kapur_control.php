<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_kapur_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_kapur');
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
        $data['page_title'] = ucfirst("Analisa Kapur");
        $data['hasil_analisa'] = $this->analisa_kapur->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_kapur_control/create_analisa_kapur/');
        $data['form_handler_update'] = base_url('input_data/analisa_kapur_control/edit_analisa_kapur/');
        $data['form_handler_delete'] = base_url('input_data/analisa_kapur_control/delete_analisa_kapur/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_kapur/main',$data);
		$this->load->view('input_data/analisa_kapur/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_kapur($id, $kapur, $supplier, $evaluasi)
    {
        $data['page_title'] = ucfirst("Analisa Kapur");
        $data['form_handler_update'] = base_url('input_data/analisa_kapur_control/update_analisa_kapur/');
        $data['id'] = $id;
        $data['kapur'] = $kapur;
        $data['supplier'] = $supplier;
        $data['evaluasi'] = $evaluasi;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_kapur/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_kapur()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $kapur = $this->input->post('kapur', TRUE);
        $supplier = $this->input->post('supplier', TRUE);
        $evaluasi = $this->input->post('evaluasi', TRUE);

        $this->analisa_kapur->createData($kapur, $supplier, $evaluasi);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_kapur_control'));
    }

    public function update_analisa_kapur()
    {
        $id = $this->input->post('id', TRUE);
        $kapur = $this->input->post('kapur', TRUE);
        $supplier = $this->input->post('supplier', TRUE);
        $evaluasi = $this->input->post('evaluasi', TRUE);

        $this->analisa_kapur->updateData($id, $kapur, $supplier, $evaluasi);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_kapur_control'));
    }

    public function delete_analisa_kapur($id)
    {   
        $this->analisa_kapur->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_kapur_control'));
    }
}
