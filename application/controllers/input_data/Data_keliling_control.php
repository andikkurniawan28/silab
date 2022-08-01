<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_keliling_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/data_keliling');
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
        $data['page_title'] = ucfirst("Data Keliling");
        $data['hasil_analisa'] = $this->data_keliling->readData();
        $data['form_handler_create'] = base_url('input_data/data_keliling_control/create_data_keliling/');
        $data['form_handler_update'] = base_url('input_data/data_keliling_control/edit_data_keliling/');
        $data['form_handler_delete'] = base_url('input_data/data_keliling_control/delete_data_keliling/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/data_keliling/main',$data);
		$this->load->view('input_data/data_keliling/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_data_keliling($id, $bahan, $bjb)
    {
        $data['page_title'] = ucfirst("Data Keliling");
        $data['form_handler_update'] = base_url('input_data/data_keliling_control/update_data_keliling/');
        $data['id'] = $id;
        $data['bahan'] = $bahan;
        $data['bjb'] = $bjb;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/data_keliling/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_data_keliling()
    {
        $tekanan_hpreevap1 = $this->input->post('tekanan_hpreevap1', TRUE); 
        $tekanan_hpreevap2 = $this->input->post('tekanan_hpreevap2', TRUE);
        $tekanan_hevap1 = $this->input->post('tekanan_hevap1', TRUE);
        $tekanan_hevap2 = $this->input->post('tekanan_hevap2', TRUE);
        $tekanan_hevap3 = $this->input->post('tekanan_hevap3', TRUE);
        $tekanan_hevap4 = $this->input->post('tekanan_hevap4', TRUE);
        $tekanan_hevap5 = $this->input->post('tekanan_hevap5', TRUE);
        $tekanan_hevap6 = $this->input->post('tekanan_hevap6', TRUE);
        $tekanan_hevap7 = $this->input->post('tekanan_hevap7', TRUE);
        $tekanan_hmasakan1 = $this->input->post('tekanan_hmasakan1', TRUE);
        $tekanan_hmasakan2 = $this->input->post('tekanan_hmasakan2', TRUE);
        $tekanan_hmasakan3 = $this->input->post('tekanan_hmasakan3', TRUE);
        $tekanan_hmasakan4 = $this->input->post('tekanan_hmasakan4', TRUE);
        $tekanan_hmasakan5 = $this->input->post('tekanan_hmasakan5', TRUE);
        $tekanan_hmasakan6 = $this->input->post('tekanan_hmasakan6', TRUE);
        $tekanan_hmasakan7 = $this->input->post('tekanan_hmasakan7', TRUE);
        $tekanan_hmasakan8 = $this->input->post('tekanan_hmasakan8', TRUE);
        $tekanan_hmasakan9 = $this->input->post('tekanan_hmasakan9', TRUE);
        $tekanan_hmasakan10 = $this->input->post('tekanan_hmasakan10', TRUE);
        $tekanan_hmasakan11 = $this->input->post('tekanan_hmasakan11', TRUE);
        $tekanan_hmasakan12 = $this->input->post('tekanan_hmasakan12', TRUE);
        $tekanan_hmasakan13 = $this->input->post('tekanan_hmasakan13', TRUE);
        $tekanan_hmasakan14 = $this->input->post('tekanan_hmasakan14', TRUE);
        $tekanan_hmasakan15 = $this->input->post('tekanan_hmasakan15', TRUE);
        $tekanan_hmasakan16 = $this->input->post('tekanan_hmasakan16', TRUE);
        $tekanan_hmasakan17 = $this->input->post('tekanan_hmasakan17', TRUE);
        $tekanan_hmasakan18 = $this->input->post('tekanan_hmasakan18', TRUE);
        $tekanan_pompamasak = $this->input->post('tekanan_pompamasak', TRUE);
        $suhu_uappreevap1 = $this->input->post('suhu_uappreevap1', TRUE);
        $suhu_uappreevap2 = $this->input->post('suhu_uappreevap2', TRUE);
        $suhu_uapevap1 = $this->input->post('suhu_uapevap1', TRUE);
        $suhu_uapevap2 = $this->input->post('suhu_uapevap2', TRUE);
        $suhu_uapevap3 = $this->input->post('suhu_uapevap3', TRUE);
        $suhu_uapevap4 = $this->input->post('suhu_uapevap4', TRUE);
        $suhu_uapevap5 = $this->input->post('suhu_uapevap5', TRUE);
        $suhu_uapevap6 = $this->input->post('suhu_uapevap6', TRUE);
        $suhu_uapevap7 = $this->input->post('suhu_uapevap7', TRUE);
        $suhu_heater1 = $this->input->post('suhu_heater1', TRUE);
        $suhu_heater2 = $this->input->post('suhu_heater2', TRUE);
        $suhu_heater3 = $this->input->post('suhu_heater3', TRUE);
        $suhu_airinjeksi = $this->input->post('suhu_airinjeksi', TRUE);
        $suhu_airterjun = $this->input->post('suhu_airterjun', TRUE);
        $tekanan_uaptinggi = $this->input->post('tekanan_uaptinggi', TRUE);
        $tekanan_uaprendah = $this->input->post('tekanan_uaprendah', TRUE);
        $tekanan_uapbekas = $this->input->post('tekanan_uapbekas', TRUE);

        $this->data_keliling->createData(
            $tekanan_hpreevap1, 
            $tekanan_hpreevap2,
            $tekanan_hevap1,
            $tekanan_hevap2,
            $tekanan_hevap3,
            $tekanan_hevap4,
            $tekanan_hevap5,
            $tekanan_hevap6,
            $tekanan_hevap7,
            $tekanan_hmasakan1,
            $tekanan_hmasakan2,
            $tekanan_hmasakan3,
            $tekanan_hmasakan4,
            $tekanan_hmasakan5,
            $tekanan_hmasakan6,
            $tekanan_hmasakan7,
            $tekanan_hmasakan8,
            $tekanan_hmasakan9,
            $tekanan_hmasakan10,
            $tekanan_hmasakan11,
            $tekanan_hmasakan12,
            $tekanan_hmasakan13,
            $tekanan_hmasakan14,
            $tekanan_hmasakan15,
            $tekanan_hmasakan16,
            $tekanan_hmasakan17,
            $tekanan_hmasakan18,
            $tekanan_pompamasak,
            $suhu_uappreevap1,
            $suhu_uappreevap2,
            $suhu_uapevap1,
            $suhu_uapevap2,
            $suhu_uapevap3,
            $suhu_uapevap4,
            $suhu_uapevap5,
            $suhu_uapevap6,
            $suhu_uapevap7,
            $suhu_heater1,
            $suhu_heater2,
            $suhu_heater3,
            $suhu_airinjeksi,
            $suhu_airterjun,
            $tekanan_uaptinggi,
            $tekanan_uaprendah,
            $tekanan_uapbekas
        );
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/data_keliling_control'));
    }

    public function update_data_keliling()
    {
        $id = $this->input->post('id', TRUE);
        $tekanan_hpreevap1 = $this->input->post('tekanan_hpreevap1', TRUE); 
        $tekanan_hpreevap2 = $this->input->post('tekanan_hpreevap2', TRUE);
        $tekanan_hevap1 = $this->input->post('tekanan_hevap1', TRUE);
        $tekanan_hevap2 = $this->input->post('tekanan_hevap2', TRUE);
        $tekanan_hevap3 = $this->input->post('tekanan_hevap3', TRUE);
        $tekanan_hevap4 = $this->input->post('tekanan_hevap4', TRUE);
        $tekanan_hevap5 = $this->input->post('tekanan_hevap5', TRUE);
        $tekanan_hevap6 = $this->input->post('tekanan_hevap6', TRUE);
        $tekanan_hevap7 = $this->input->post('tekanan_hevap7', TRUE);
        $tekanan_hmasakan1 = $this->input->post('tekanan_hmasakan1', TRUE);
        $tekanan_hmasakan2 = $this->input->post('tekanan_hmasakan2', TRUE);
        $tekanan_hmasakan3 = $this->input->post('tekanan_hmasakan3', TRUE);
        $tekanan_hmasakan4 = $this->input->post('tekanan_hmasakan4', TRUE);
        $tekanan_hmasakan5 = $this->input->post('tekanan_hmasakan5', TRUE);
        $tekanan_hmasakan6 = $this->input->post('tekanan_hmasakan6', TRUE);
        $tekanan_hmasakan7 = $this->input->post('tekanan_hmasakan7', TRUE);
        $tekanan_hmasakan8 = $this->input->post('tekanan_hmasakan8', TRUE);
        $tekanan_hmasakan9 = $this->input->post('tekanan_hmasakan9', TRUE);
        $tekanan_hmasakan10 = $this->input->post('tekanan_hmasakan10', TRUE);
        $tekanan_hmasakan11 = $this->input->post('tekanan_hmasakan11', TRUE);
        $tekanan_hmasakan12 = $this->input->post('tekanan_hmasakan12', TRUE);
        $tekanan_hmasakan13 = $this->input->post('tekanan_hmasakan13', TRUE);
        $tekanan_hmasakan14 = $this->input->post('tekanan_hmasakan14', TRUE);
        $tekanan_hmasakan15 = $this->input->post('tekanan_hmasakan15', TRUE);
        $tekanan_hmasakan16 = $this->input->post('tekanan_hmasakan16', TRUE);
        $tekanan_hmasakan17 = $this->input->post('tekanan_hmasakan17', TRUE);
        $tekanan_hmasakan18 = $this->input->post('tekanan_hmasakan18', TRUE);
        $tekanan_pompamasak = $this->input->post('tekanan_pompamasak', TRUE);
        $suhu_uappreevap1 = $this->input->post('suhu_uappreevap1', TRUE);
        $suhu_uappreevap2 = $this->input->post('suhu_uappreevap2', TRUE);
        $suhu_uapevap1 = $this->input->post('suhu_uapevap1', TRUE);
        $suhu_uapevap2 = $this->input->post('suhu_uapevap2', TRUE);
        $suhu_uapevap3 = $this->input->post('suhu_uapevap3', TRUE);
        $suhu_uapevap4 = $this->input->post('suhu_uapevap4', TRUE);
        $suhu_uapevap5 = $this->input->post('suhu_uapevap5', TRUE);
        $suhu_uapevap6 = $this->input->post('suhu_uapevap6', TRUE);
        $suhu_uapevap7 = $this->input->post('suhu_uapevap7', TRUE);
        $suhu_heater1 = $this->input->post('suhu_heater1', TRUE);
        $suhu_heater2 = $this->input->post('suhu_heater2', TRUE);
        $suhu_heater3 = $this->input->post('suhu_heater3', TRUE);
        $suhu_airinjeksi = $this->input->post('suhu_airinjeksi', TRUE);
        $suhu_airterjun = $this->input->post('suhu_airterjun', TRUE);
        $tekanan_uaptinggi = $this->input->post('tekanan_uaptinggi', TRUE);
        $tekanan_uaprendah = $this->input->post('tekanan_uaprendah', TRUE);
        $tekanan_uapbekas = $this->input->post('tekanan_uapbekas', TRUE);

        $this->data_keliling->updateData(
            $id, 
            $tekanan_hpreevap1, 
            $tekanan_hpreevap2,
            $tekanan_hevap1,
            $tekanan_hevap2,
            $tekanan_hevap3,
            $tekanan_hevap4,
            $tekanan_hevap5,
            $tekanan_hevap6,
            $tekanan_hevap7,
            $tekanan_hmasakan1,
            $tekanan_hmasakan2,
            $tekanan_hmasakan3,
            $tekanan_hmasakan4,
            $tekanan_hmasakan5,
            $tekanan_hmasakan6,
            $tekanan_hmasakan7,
            $tekanan_hmasakan8,
            $tekanan_hmasakan9,
            $tekanan_hmasakan10,
            $tekanan_hmasakan11,
            $tekanan_hmasakan12,
            $tekanan_hmasakan13,
            $tekanan_hmasakan14,
            $tekanan_hmasakan15,
            $tekanan_hmasakan16,
            $tekanan_hmasakan17,
            $tekanan_hmasakan18,
            $tekanan_pompamasak,
            $suhu_uappreevap1,
            $suhu_uappreevap2,
            $suhu_uapevap1,
            $suhu_uapevap2,
            $suhu_uapevap3,
            $suhu_uapevap4,
            $suhu_uapevap5,
            $suhu_uapevap6,
            $suhu_uapevap7,
            $suhu_heater1,
            $suhu_heater2,
            $suhu_heater3,
            $suhu_airinjeksi,
            $suhu_airterjun,
            $tekanan_uaptinggi,
            $tekanan_uaprendah,
            $tekanan_uapbekas
        );
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/data_keliling_control'));
    }

    public function delete_data_keliling($id)
    {   
        $this->data_keliling->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/data_keliling_control'));
    }
}
