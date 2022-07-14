<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_ampas_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('analisa_ampas');
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
        $data['page_title']             = "Analisa Ampas";
        $data['hasil_analisa']          = $this->analisa_ampas->readData();
        $data['form_handler_create']    = base_url('analisa_ampas_control/create_analisa_ampas/');
        $data['form_handler_update']    = base_url('analisa_ampas_control/update_analisa_ampas/');
        $data['form_handler_delete']    = base_url('analisa_ampas_control/delete_analisa_ampas/');

        $this->load->view('layout/header');
		$this->load->view('analisa_ampas/dashboard',$data);
		$this->load->view('modal/analisa_ampas',$data);
		$this->load->view('layout/footer');
	}

    public function create_analisa_ampas()
    {
        $bahan          = $this->input->post('bahan', TRUE);
        $pol_koreksi    = $this->input->post('pol_koreksi', TRUE);
        $zk             = $this->input->post('zk', TRUE);
        $kadar_air      = $this->input->post('kadar_air', TRUE);

        $this->analisa_ampas->createData($bahan, $pol_koreksi, $zk, $kadar_air);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('analisa_ampas_control'));
    }

    public function update_analisa_ampas()
    {
        $id             = $this->input->post('id', TRUE);
        $bahan          = $this->input->post('bahan', TRUE);
        $pol_koreksi    = $this->input->post('pol_koreksi', TRUE);
        $zk             = $this->input->post('zk', TRUE);
        $kadar_air      = $this->input->post('kadar_air', TRUE);

        $this->analisa_ampas->updateData($id, $bahan, $pol_koreksi, $zk, $kadar_air);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('analisa_ampas_control'));
    }

    public function delete_analisa_ampas($id)
    {   
        $this->analisa_ampas->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('analisa_ampas_control'));
    }
}
