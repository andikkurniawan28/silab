<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_sabut_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_sabut');
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
        $data['page_title'] = ucfirst("Analisa Sabut");
        $data['hasil_analisa'] = $this->analisa_sabut->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_sabut_control/create_analisa_sabut/');
        $data['form_handler_update'] = base_url('input_data/analisa_sabut_control/edit_analisa_sabut/');
        $data['form_handler_delete'] = base_url('input_data/analisa_sabut_control/delete_analisa_sabut/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_sabut/main',$data);
		$this->load->view('input_data/analisa_sabut/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_sabut($id, $sabut_basah, $sabut_kering, $kadar_sabut)
    {
        $data['page_title'] = ucfirst("Analisa Sabut");
        $data['form_handler_update'] = base_url('input_data/analisa_sabut_control/update_analisa_sabut/');
        $data['id'] = $id;
        $data['sabut_basah'] = $sabut_basah;
        $data['sabut_kering'] = $sabut_kering;
        $data['kadar_sabut'] = $kadar_sabut;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_sabut/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_sabut()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $sabut_basah = $this->input->post('sabut_basah', TRUE);
        $sabut_kering = $this->input->post('sabut_kering', TRUE);
        $kadar_sabut = $this->input->post('kadar_sabut', TRUE);

        $this->analisa_sabut->createData($sabut_basah, $sabut_kering, $kadar_sabut);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_sabut_control'));
    }

    public function update_analisa_sabut()
    {
        $id = $this->input->post('id', TRUE);
        $sabut_basah = $this->input->post('sabut_basah', TRUE);
        $sabut_kering = $this->input->post('sabut_kering', TRUE);
        $kadar_sabut = $this->input->post('kadar_sabut', TRUE);

        $this->analisa_sabut->updateData($id, $sabut_basah, $sabut_kering, $kadar_sabut);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_sabut_control'));
    }

    public function delete_analisa_sabut($id)
    {   
        $this->analisa_sabut->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_sabut_control'));
    }
}
