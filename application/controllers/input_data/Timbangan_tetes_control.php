<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbangan_tetes_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/timbangan_tetes');
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
        $data['page_title'] = ucfirst("Timbangan Tetes");
        $data['hasil_analisa'] = $this->timbangan_tetes->readData();
        $data['form_handler_create'] = base_url('input_data/timbangan_tetes_control/create_timbangan_tetes/');
        $data['form_handler_update'] = base_url('input_data/timbangan_tetes_control/edit_timbangan_tetes/');
        $data['form_handler_delete'] = base_url('input_data/timbangan_tetes_control/delete_timbangan_tetes/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/timbangan_tetes/main',$data);
		$this->load->view('input_data/timbangan_tetes/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_timbangan_tetes($id, $time, $bruto, $tara, $netto)
    {
        $data['page_title'] = ucfirst("Timbangan Tetes");
        $data['form_handler_update'] = base_url('input_data/timbangan_tetes_control/update_timbangan_tetes/');
        $data['id'] = $id;
        $data['time'] = $time;
        $data['bruto'] = $bruto;
        $data['tara'] = $tara;
        $data['netto'] = $netto;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/timbangan_tetes/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_timbangan_tetes()
    {
        $bruto = $this->input->post('bruto', TRUE);
        $tara = $this->input->post('tara', TRUE);
        $netto = $this->input->post('netto', TRUE);

        $this->timbangan_tetes->createData($bruto, $tara, $netto);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/timbangan_tetes_control'));
    }

    public function update_timbangan_tetes()
    {
        $id = $this->input->post('id', TRUE);
        $time = $this->input->post('time', TRUE);
        $bruto = $this->input->post('bruto', TRUE);
        $tara = $this->input->post('tara', TRUE);
        $netto = $this->input->post('netto', TRUE);

        $this->timbangan_tetes->updateData($id, $time, $bruto, $tara, $netto);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/timbangan_tetes_control'));
    }

    public function delete_timbangan_tetes($id)
    {   
        $this->timbangan_tetes->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/timbangan_tetes_control'));
    }
}
