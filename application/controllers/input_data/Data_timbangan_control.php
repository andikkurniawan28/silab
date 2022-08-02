<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_timbangan_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/data_timbangan');
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
        $data['page_title'] = ucfirst("Data Timbangan");
        $data['hasil_analisa'] = $this->data_timbangan->readData();
        $data['form_handler_create'] = base_url('input_data/data_timbangan_control/create_data_timbangan/');
        $data['form_handler_update'] = base_url('input_data/data_timbangan_control/edit_data_timbangan/');
        $data['form_handler_delete'] = base_url('input_data/data_timbangan_control/delete_data_timbangan/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/data_timbangan/main',$data);
		$this->load->view('input_data/data_timbangan/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_data_timbangan($id, $berat_tebu, $totalizer, $flow_nm, $nm_tebu)
    {
        $data['page_title'] = ucfirst("Data Timbangan");
        $data['form_handler_update'] = base_url('input_data/data_timbangan_control/update_data_timbangan/');
        $data['id'] = $id;
        $data['berat_tebu'] = $berat_tebu;
        $data['totalizer'] = $totalizer;
        $data['flow_nm'] = $flow_nm;
        $data['nm_tebu'] = $nm_tebu;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/data_timbangan/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_data_timbangan()
    {
        $berat_tebu = $this->input->post('berat_tebu', TRUE);
        $totalizer = $this->input->post('totalizer', TRUE);
        $totalizer_old = $this->data_timbangan->getLastTotalizer();
        $flow_nm = ($totalizer - $totalizer_old) * 0.85;
        $nm_tebu = number_format(($flow_nm / $berat_tebu) * 1000,2);

        $this->data_timbangan->createData($berat_tebu, $totalizer, $flow_nm, $nm_tebu);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/data_timbangan_control'));
    }

    public function update_data_timbangan()
    {
        $id = $this->input->post('id', TRUE);
        $berat_tebu = $this->input->post('berat_tebu', TRUE);
        $totalizer = $this->input->post('totalizer', TRUE);
        $flow_nm = $this->input->post('flow_nm', TRUE);
        $nm_tebu = $this->input->post('nm_tebu', TRUE);

        $this->data_timbangan->updateData($id, $berat_tebu, $totalizer, $flow_nm, $nm_tebu);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/data_timbangan_control'));
    }

    public function delete_data_timbangan($id)
    {   
        $this->data_timbangan->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/data_timbangan_control'));
    }
}
