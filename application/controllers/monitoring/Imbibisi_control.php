<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imbibisi_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
        $this->load->model('table/imbibisi');
    }

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
		redirect(base_url('auth'));
	}

	public function index()
	{
        $data['page_title'] = ucfirst("Imbibisi");
        $data['hasil_analisa'] = $this->imbibisi->readData();
        $data['form_handler_create'] = base_url('monitoring/imbibisi_control/create_imbibisi/');
        $data['form_handler_update'] = base_url('monitoring/imbibisi_control/edit_imbibisi/');
        $data['form_handler_delete'] = base_url('monitoring/imbibisi_control/delete_imbibisi/');

        $this->load->view('static/header', $data);
		$this->load->view('monitoring/imbibisi/main',$data);
		$this->load->view('monitoring/imbibisi/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_imbibisi($id, $totalizer_imb, $flow_imb)
    {
        $data['page_title'] = ucfirst("Imbibisi");
        $data['form_handler_update'] = base_url('monitoring/imbibisi_control/update_imbibisi/');
        $data['id'] = $id;
        $data['totalizer_imb'] = $totalizer_imb;
        $data['flow_imb'] = $flow_imb;

        $this->load->view('static/header',$data);
		$this->load->view('monitoring/imbibisi/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_imbibisi()
    {
        $totalizer_imb = $this->input->post('totalizer_imb', TRUE);
        $totalizer_old = $this->imbibisi->getLasttotalizer_imb();
        $flow_imb = ($totalizer_imb - $totalizer_old) * 0.95;

        $this->imbibisi->createData($totalizer_imb, $flow_imb);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('monitoring/imbibisi_control'));
    }

    public function update_imbibisi()
    {
        $id = $this->input->post('id', TRUE);
        $totalizer_imb = $this->input->post('totalizer_imb', TRUE);
        $flow_imb = $this->input->post('flow_imb', TRUE);

        $this->imbibisi->updateData($id, $totalizer_imb, $flow_imb);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('monitoring/imbibisi_control'));
    }

    public function delete_imbibisi($id)
    {   
        $this->imbibisi->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('monitoring/imbibisi_control'));
    }
}
