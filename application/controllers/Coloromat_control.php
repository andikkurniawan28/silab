<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coloromat_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('coloromat');
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
        $data['page_title']             = ucfirst("coloromat");
        $data['hasil_analisa']          = $this->coloromat->readData();
        $data['form_handler_create']    = base_url('coloromat_control/create_coloromat/');
        $data['form_handler_update']    = base_url('coloromat_control/edit_coloromat/');
        $data['form_handler_delete']    = base_url('coloromat_control/delete_coloromat/');

        $this->load->view('static/header', $data);
		$this->load->view('input/coloromat',$data);
		$this->load->view('modal/coloromat',$data);
		$this->load->view('static/footer');
	}

    public function edit_coloromat($id, $bahan, $IU)
    {
        $data['page_title']             = ucfirst("coloromat");
        $data['form_handler_update']    = base_url('coloromat_control/update_coloromat/');
        $data['id']                     = $id;
        $data['bahan']                  = $bahan;
        $data['IU']                     = $IU;

        $this->load->view('static/header',$data);
        $this->load->view('edit/edit_coloromat',$data);
		$this->load->view('static/footer');
    }

    public function create_coloromat()
    {
        $bahan      = $this->input->post('bahan', TRUE);
        $IU         = $this->input->post('IU', TRUE);

        $this->coloromat->createData($bahan, $IU);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('coloromat_control'));
    }

    public function update_coloromat()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $IU         = $this->input->post('IU', TRUE);

        $this->coloromat->updateData($id, $bahan, $IU);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('coloromat_control'));
    }

    public function delete_coloromat($id)
    {   
        $this->coloromat->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('coloromat_control'));
    }
}
