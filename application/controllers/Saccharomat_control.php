<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saccharomat_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('saccharomat');
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
        $data['page_title']             = ucfirst("saccharomat");
        $data['hasil_analisa']          = $this->saccharomat->readData();
        $data['form_handler_create']    = base_url('saccharomat_control/create_saccharomat/');
        $data['form_handler_update']    = base_url('saccharomat_control/edit_saccharomat/');
        $data['form_handler_delete']    = base_url('saccharomat_control/delete_saccharomat/');

        $this->load->view('static/header',$data);
		$this->load->view('input/saccharomat',$data);
		$this->load->view('modal/saccharomat',$data);
		$this->load->view('static/footer');
	}

    public function edit_saccharomat($id, $bahan, $brix, $pol, $Z)
    {
        $data['page_title']             = ucfirst("saccharomat");
        $data['form_handler_update']    = base_url('saccharomat_control/update_saccharomat/');
        $data['id']                     = $id;
        $data['bahan']                  = $bahan;
        $data['brix']                   = $brix;
        $data['pol']                    = $pol;
        $data['Z']                      = $Z;

        $this->load->view('static/header',$data);
        $this->load->view('edit/edit_saccharomat',$data);
		$this->load->view('static/footer');
    }

    public function create_saccharomat()
    {
        $bahan      = $this->input->post('bahan', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $Z          = $this->input->post('Z', TRUE);

        if(isset($_POST['denganHK'])) $hk = $this->getHk($brix, $pol);
        elseif(isset($_POST['tanpaHK']))$hk = 0;

        $this->saccharomat->createData($bahan, $brix, $pol, $Z, $hk);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('saccharomat_control'));
    }

    public function update_saccharomat()
    {
        $id         = $this->input->post('id', TRUE);
        $bahan      = $this->input->post('bahan', TRUE);
        $brix       = $this->input->post('brix', TRUE);
        $pol        = $this->input->post('pol', TRUE);
        $Z          = $this->input->post('Z', TRUE);

        if(isset($_POST['denganHK'])) $hk = $this->getHk($brix, $pol);
        elseif(isset($_POST['tanpaHK']))$hk = 0;

        $this->saccharomat->updateData($id, $bahan, $brix, $pol, $Z, $hk);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('saccharomat_control'));
    }

    public function delete_saccharomat($id)
    {   
        $this->saccharomat->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('saccharomat_control'));
    }

    public function getHk($brix, $pol)
    {
        return number_format($pol/$brix * 100,2);
    }
}
