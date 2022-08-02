<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbangan_rs_in_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/timbangan_rs_in');
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
        $data['page_title'] = ucfirst("Timbangan RS In");
        $data['hasil_analisa'] = $this->timbangan_rs_in->readData();
        $data['form_handler_create'] = base_url('input_data/timbangan_rs_in_control/create_timbangan_rs_in/');
        $data['form_handler_update'] = base_url('input_data/timbangan_rs_in_control/edit_timbangan_rs_in/');
        $data['form_handler_delete'] = base_url('input_data/timbangan_rs_in_control/delete_timbangan_rs_in/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/timbangan_rs_in/main',$data);
		$this->load->view('input_data/timbangan_rs_in/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_timbangan_rs_in($id, $time, $bruto, $tara, $netto)
    {
        $data['page_title'] = ucfirst("Timbangan RS In");
        $data['form_handler_update'] = base_url('input_data/timbangan_rs_in_control/update_timbangan_rs_in/');
        $data['id'] = $id;
        $data['time'] = $time;
        $data['bruto'] = $bruto;
        $data['tara'] = $tara;
        $data['netto'] = $netto;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/timbangan_rs_in/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_timbangan_rs_in()
    {
        $date = $this->input->post('date', TRUE);
        $time = $this->input->post('time', TRUE);
        $bruto = $this->input->post('bruto', TRUE);
        $tara = $this->input->post('tara', TRUE);
        $netto = $this->input->post('netto', TRUE);
        $datetime = $date.' '.$time;

        $this->timbangan_rs_in->createData($bruto, $tara, $netto, $datetime);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/timbangan_rs_in_control'));
    }

    public function update_timbangan_rs_in()
    {
        $id = $this->input->post('id', TRUE);
        $time = $this->input->post('time', TRUE);
        $bruto = $this->input->post('bruto', TRUE);
        $tara = $this->input->post('tara', TRUE);
        $netto = $this->input->post('netto', TRUE);

        $this->timbangan_rs_in->updateData($id, $time, $bruto, $tara, $netto);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/timbangan_rs_in_control'));
    }

    public function delete_timbangan_rs_in($id)
    {   
        $this->timbangan_rs_in->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/timbangan_rs_in_control'));
    }
}
