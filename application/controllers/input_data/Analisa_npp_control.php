<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_npp_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_npp');
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
        $data['page_title'] = ucfirst("analisa_npp");
        $data['hasil_analisa'] = $this->analisa_npp->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_npp_control/create_analisa_npp/');
        $data['form_handler_update'] = base_url('input_data/analisa_npp_control/edit_analisa_npp/');
        $data['form_handler_delete'] = base_url('input_data/analisa_npp_control/delete_analisa_npp/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_npp/main',$data);
		$this->load->view('input_data/analisa_npp/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_npp($id, $brix, $pol)
    {
        $data['page_title'] = ucfirst("analisa_npp");
        $data['form_handler_update'] = base_url('input_data/analisa_npp_control/update_analisa_npp/');
        $data['id'] = $id;
        $data['brix'] = $brix;
        $data['pol'] = $pol;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_npp/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_npp()
    {
        $brix = $this->input->post('brix', TRUE); 
        $pol = $this->input->post('pol', TRUE);
        $rendemen = $this->analisa_npp->hitungRendemenNPP($brix, $pol);

        $this->analisa_npp->createData($brix, $pol, $rendemen);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_npp_control'));
    }

    public function update_analisa_npp()
    {
        $id = $this->input->post('id', TRUE);
        $brix = $this->input->post('brix', TRUE);
        $pol = $this->input->post('pol', TRUE);
        $rendemen = $this->analisa_npp->hitungRendemenNPP($brix, $pol);

        $this->analisa_npp->updateData($id, $brix, $pol, $rendemen);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_npp_control'));
    }

    public function delete_analisa_npp($id)
    {   
        $this->analisa_npp->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_npp_control'));
    }
}
