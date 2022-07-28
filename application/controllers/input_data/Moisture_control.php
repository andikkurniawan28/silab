<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moisture_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/moisture');
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
        $data['page_title'] = ucfirst("moisture");
        $data['hasil_analisa'] = $this->moisture->readData();
        $data['form_handler_create'] = base_url('input_data/moisture_control/create_moisture/');
        $data['form_handler_update'] = base_url('input_data/moisture_control/edit_moisture/');
        $data['form_handler_delete'] = base_url('input_data/moisture_control/delete_moisture/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/moisture/main',$data);
		$this->load->view('input_data/moisture/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_moisture($id, $bahan, $kadar_air)
    {
        $data['page_title'] = ucfirst("moisture");
        $data['form_handler_update'] = base_url('input_data/moisture_control/update_moisture/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['kadar_air'] = $kadar_air;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/moisture/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_moisture()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $kadar_air = $this->input->post('kadar_air', TRUE);

        $this->moisture->createData($bahan, $kadar_air);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/moisture_control'));
    }

    public function update_moisture()
    {
        $id = $this->input->post('id', TRUE);
        $bahan = $this->input->post('bahan', TRUE);
        $kadar_air = $this->input->post('kadar_air', TRUE);

        $this->moisture->updateData($id, $bahan, $kadar_air);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/moisture_control'));
    }

    public function delete_moisture($id)
    {   
        $this->moisture->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/moisture_control'));
    }
}
