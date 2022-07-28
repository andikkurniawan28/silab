<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_bjb_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/analisa_bjb');
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
        $data['page_title'] = ucfirst("analisa_bjb");
        $data['hasil_analisa'] = $this->analisa_bjb->readData();
        $data['form_handler_create'] = base_url('input_data/analisa_bjb_control/create_analisa_bjb/');
        $data['form_handler_update'] = base_url('input_data/analisa_bjb_control/edit_analisa_bjb/');
        $data['form_handler_delete'] = base_url('input_data/analisa_bjb_control/delete_analisa_bjb/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/analisa_bjb/main',$data);
		$this->load->view('input_data/analisa_bjb/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_analisa_bjb($id, $bahan, $bjb)
    {
        $data['page_title'] = ucfirst("analisa_bjb");
        $data['form_handler_update'] = base_url('input_data/analisa_bjb_control/update_analisa_bjb/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['bjb'] = $bjb;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/analisa_bjb/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_analisa_bjb()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $bjb = $this->input->post('bjb', TRUE);

        $this->analisa_bjb->createData($bahan, $bjb);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/analisa_bjb_control'));
    }

    public function update_analisa_bjb()
    {
        $id = $this->input->post('id', TRUE);
        $bahan = $this->input->post('bahan', TRUE);
        $bjb = $this->input->post('bjb', TRUE);

        $this->analisa_bjb->updateData($id, $bahan, $bjb);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/analisa_bjb_control'));
    }

    public function delete_analisa_bjb($id)
    {   
        $this->analisa_bjb->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/analisa_bjb_control'));
    }
}
