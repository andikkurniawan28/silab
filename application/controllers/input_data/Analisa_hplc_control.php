<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_hplc_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_hplc');
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
        $data['page_title'] = ucfirst("Analisa HPLC");
        $data['hasil_analisa'] = $this->analisa_hplc->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_hplc_control/create_analisa_hplc/');
        $data['form_handler_update'] = base_url('input_data/analisa_hplc_control/edit_analisa_hplc/');
        $data['form_handler_delete'] = base_url('input_data/analisa_hplc_control/delete_analisa_hplc/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_hplc/main',$data);
		$this->load->view('input_data/analisa_hplc/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_hplc($id, $bahan, $fruktosa, $glukosa, $sukrosa)
    {
        $data['page_title'] = ucfirst("Analisa HPLC");
        $data['form_handler_update'] = base_url('input_data/analisa_hplc_control/update_analisa_hplc/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['fruktosa'] = $fruktosa;
        $data['glukosa'] = $glukosa;
        $data['sukrosa'] = $sukrosa;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_hplc/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_hplc()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $fruktosa = $this->input->post('fruktosa', TRUE);
        $glukosa = $this->input->post('glukosa', TRUE);
        $sukrosa = $this->input->post('sukrosa', TRUE);

        $this->analisa_hplc->createData($bahan, $fruktosa, $glukosa, $sukrosa);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_hplc_control'));
    }

    public function update_analisa_hplc()
    {
        $id = $this->input->post('id', TRUE);
        $bahan = $this->input->post('bahan', TRUE);
        $fruktosa = $this->input->post('fruktosa', TRUE);
        $glukosa = $this->input->post('glukosa', TRUE);
        $sukrosa = $this->input->post('sukrosa', TRUE);

        $this->analisa_hplc->updateData($id, $bahan, $fruktosa, $glukosa, $sukrosa);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_hplc_control'));
    }

    public function delete_analisa_hplc($id)
    {   
        $this->analisa_hplc->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_hplc_control'));
    }
}
