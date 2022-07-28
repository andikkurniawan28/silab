<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_tsai_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_tsai');
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
        $data['page_title'] = ucfirst("Analisa TSAI");
        $data['hasil_analisa'] = $this->analisa_tsai->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_tsai_control/create_analisa_tsai/');
        $data['form_handler_update'] = base_url('input_data/analisa_tsai_control/edit_analisa_tsai/');
        $data['form_handler_delete'] = base_url('input_data/analisa_tsai_control/delete_analisa_tsai/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_tsai/main',$data);
		$this->load->view('input_data/analisa_tsai/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_tsai($id, $bahan, $tsai)
    {
        $data['page_title'] = ucfirst("Analisa TSAI");
        $data['form_handler_update'] = base_url('input_data/analisa_tsai_control/update_analisa_tsai/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['tsai'] = $tsai;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_tsai/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_tsai()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $tsai = $this->input->post('tsai', TRUE);

        $this->analisa_tsai->createData($bahan, $tsai);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_tsai_control'));
    }

    public function update_analisa_tsai()
    {
        $id = $this->input->post('id', TRUE);
        $bahan = $this->input->post('bahan', TRUE);
        $tsai = $this->input->post('tsai', TRUE);

        $this->analisa_tsai->updateData($id, $bahan, $tsai);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_tsai_control'));
    }

    public function delete_analisa_tsai($id)
    {   
        $this->analisa_tsai->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_tsai_control'));
    }
}
