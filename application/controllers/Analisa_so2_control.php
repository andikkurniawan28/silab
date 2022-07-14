<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_so2_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('analisa_so2');
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
        $data['page_title']             = "Analisa SO<sub>2</sub>";
        $data['hasil_analisa']          = $this->analisa_so2->readData();
        $data['form_handler_create']    = base_url('analisa_so2_control/create_analisa_so2/');
        $data['form_handler_update']    = base_url('analisa_so2_control/update_analisa_so2/');
        $data['form_handler_delete']    = base_url('analisa_so2_control/delete_analisa_so2/');

        $this->load->view('layout/header');
		$this->load->view('analisa_so2/dashboard',$data);
		$this->load->view('modal/analisa_so2',$data);
		$this->load->view('layout/footer');
	}

    public function create_analisa_so2()
    {
        $bahan      = $this->input->post('bahan', TRUE);
        $so2        = $this->input->post('so2', TRUE);

        $this->analisa_so2->createData($bahan, $so2);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('analisa_so2_control'));
    }

    public function update_analisa_so2()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $so2  = $this->input->post('so2', TRUE);

        $this->analisa_so2->updateData($id, $bahan, $so2);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('analisa_so2_control'));
    }

    public function delete_analisa_so2($id)
    {   
        $this->analisa_so2->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('analisa_so2_control'));
    }
}
