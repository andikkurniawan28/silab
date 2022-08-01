<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_pi_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_pi');
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
        $data['page_title'] = ucfirst("Analisa PI");
        $data['hasil_analisa'] = $this->analisa_pi->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_pi_control/create_analisa_pi/');
        $data['form_handler_update'] = base_url('input_data/analisa_pi_control/edit_analisa_pi/');
        $data['form_handler_delete'] = base_url('input_data/analisa_pi_control/delete_analisa_pi/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_pi/main',$data);
		$this->load->view('input_data/analisa_pi/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_pi($id, $p1, $p2, $pi)
    {
        $data['page_title'] = ucfirst("Analisa PI");
        $data['form_handler_update'] = base_url('input_data/analisa_pi_control/update_analisa_pi/');
        $data['id'] = $id;
        $data['p1'] = $p1;
        $data['p2'] = $p2;
        $data['pi'] = $pi;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_pi/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_pi()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $p1 = $this->input->post('p1', TRUE);
        $p2 = $this->input->post('p2', TRUE);
        $pi = $this->input->post('pi', TRUE);

        $this->analisa_pi->createData($p1, $p2, $pi);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_pi_control'));
    }

    public function update_analisa_pi()
    {
        $id = $this->input->post('id', TRUE);
        $p1 = $this->input->post('p1', TRUE);
        $p2 = $this->input->post('p2', TRUE);
        $pi = $this->input->post('pi', TRUE);

        $this->analisa_pi->updateData($id, $p1, $p2, $pi);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_pi_control'));
    }

    public function delete_analisa_pi($id)
    {   
        $this->analisa_pi->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_pi_control'));
    }
}
