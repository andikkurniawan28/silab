<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volume_tetes_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/volume_tetes');
    }

	public function checkUserIsLogin()
	{
		if($this->session->userdata('status') != 'login')
		redirect(base_url('auth'));
	}

	public function checkUserIsAdmin()
	{
		if($this->session->userdata('role') != 'admin')
		redirect(base_url('auth'));
	}

	public function index()
	{
        $data['page_title'] = ucfirst("Taksasi Tetes");
        $data['hasil_analisa'] = $this->volume_tetes->readData();
        $data['form_handler_create'] = base_url('input_data/volume_tetes_control/create_volume_tetes/');
        $data['form_handler_update'] = base_url('input_data/volume_tetes_control/edit_volume_tetes/');
        $data['form_handler_delete'] = base_url('input_data/volume_tetes_control/delete_volume_tetes/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/volume_tetes/main',$data);
		$this->load->view('input_data/volume_tetes/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_volume_tetes($id, $tanggal, $volume_t1, $meteran_t1, $volume_t2, $meteran_t2, $volume_t3, $meteran_t3, $volume_t4, $meteran_t4)
    {
        $data['page_title'] = ucfirst("Taksasi Tetes");
        $data['form_handler_update'] = base_url('input_data/volume_tetes_control/update_volume_tetes/');
        $data['id'] = $id;
        $data['tanggal'] = $tanggal;
        $data['volume_t1'] = $volume_t1;
        $data['meteran_t1'] = $meteran_t1;
        $data['volume_t2'] = $volume_t2;
        $data['meteran_t2'] = $meteran_t2;
        $data['volume_t3'] = $volume_t3;
        $data['meteran_t3'] = $meteran_t3;
        $data['volume_t4'] = $volume_t4;
        $data['meteran_t4'] = $meteran_t4;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/volume_tetes/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_volume_tetes()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $tanggal = $this->input->post('tanggal', TRUE);
        $volume_t1 = $this->input->post('volume_t1', TRUE);
        $meteran_t1 = $this->input->post('meteran_t1', TRUE);
        $volume_t2 = $this->input->post('volume_t2', TRUE);
        $meteran_t2 = $this->input->post('meteran_t2', TRUE);
        $volume_t3 = $this->input->post('volume_t3', TRUE);
        $meteran_t3 = $this->input->post('meteran_t3', TRUE);
        $volume_t4 = $this->input->post('volume_t4', TRUE);
        $meteran_t4 = $this->input->post('meteran_t4', TRUE);

        $this->volume_tetes->createData($tanggal, $volume_t1, $meteran_t1, $volume_t2, $meteran_t2, $volume_t3, $meteran_t3, $volume_t4, $meteran_t4);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/volume_tetes_control'));
    }

    public function update_volume_tetes()
    {
        $id = $this->input->post('id', TRUE);
        $tanggal = $this->input->post('tanggal', TRUE);
        $volume_t1 = $this->input->post('volume_t1', TRUE);
        $meteran_t1 = $this->input->post('meteran_t1', TRUE);
        $volume_t2 = $this->input->post('volume_t2', TRUE);
        $meteran_t2 = $this->input->post('meteran_t2', TRUE);
        $volume_t3 = $this->input->post('volume_t3', TRUE);
        $meteran_t3 = $this->input->post('meteran_t3', TRUE);
        $volume_t4 = $this->input->post('volume_t4', TRUE);
        $meteran_t4 = $this->input->post('meteran_t4', TRUE);

        $this->volume_tetes->updateData($id, $tanggal, $volume_t1, $meteran_t1, $volume_t2, $meteran_t2, $volume_t3, $meteran_t3, $volume_t4, $meteran_t4);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/volume_tetes_control'));
    }

    public function delete_volume_tetes($id)
    {   
        $this->volume_tetes->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/volume_tetes_control'));
    }
}
