<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bahankimia_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/data_bahankimia');
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
        $data['page_title'] = ucfirst("Bahan Kimia");
        $data['hasil_analisa'] = $this->data_bahankimia->readData();
        $data['form_handler_create'] = base_url('input_data/data_bahankimia_control/create_data_bahankimia/');
        $data['form_handler_update'] = base_url('input_data/data_bahankimia_control/edit_data_bahankimia/');
        $data['form_handler_delete'] = base_url('input_data/data_bahankimia_control/delete_data_bahankimia/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/data_bahankimia/main',$data);
		$this->load->view('input_data/data_bahankimia/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_data_bahankimia($id, $belerang, $kapur, $floc_total, $naoh_evap, $bulab, $diial, $b894, $b895, $b210, $asam_phospat, $blotong)
    {
        $data['page_title'] = ucfirst("Bahan Kimia");
        $data['form_handler_update'] = base_url('input_data/data_bahankimia_control/update_data_bahankimia/');
        $data['id'] = $id;
        $data['belerang'] = $belerang;
        $data['kapur'] = $kapur;
        $data['floc_total'] = $floc_total;
        $data['naoh_evap'] = $naoh_evap;
        $data['bulab'] = $bulab;
        $data['diial'] = $diial;
        $data['b894'] = $b894;
        $data['b895'] = $b895;
        $data['b210'] = $b210;
        $data['asam_phospat'] = $asam_phospat;
        $data['blotong'] = $blotong;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/data_bahankimia/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_data_bahankimia()
    {
        $bahan = $this->input->post('bahan', TRUE);
        $belerang = $this->input->post('belerang', TRUE);
        $kapur = $this->input->post('kapur', TRUE);
        $floc_total = $this->input->post('floc_total', TRUE);
        $naoh_evap = $this->input->post('naoh_evap', TRUE);
        $bulab = $this->input->post('bulab', TRUE);
        $diial = $this->input->post('diial', TRUE);
        $b894 = $this->input->post('b894', TRUE);
        $b895 = $this->input->post('b895', TRUE);
        $b210 = $this->input->post('b210', TRUE);
        $asam_phospat = $this->input->post('asam_phospat', TRUE);
        $blotong = $this->input->post('blotong', TRUE);

        $this->data_bahankimia->createData($belerang, $kapur, $floc_total, $naoh_evap, $bulab, $diial, $b894, $b895, $b210, $asam_phospat, $blotong);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/data_bahankimia_control'));
    }

    public function update_data_bahankimia()
    {
        $id = $this->input->post('id', TRUE);
        $belerang = $this->input->post('belerang', TRUE);
        $kapur = $this->input->post('kapur', TRUE);
        $floc_total = $this->input->post('floc_total', TRUE);
        $naoh_evap = $this->input->post('naoh_evap', TRUE);
        $bulab = $this->input->post('bulab', TRUE);
        $diial = $this->input->post('diial', TRUE);
        $b894 = $this->input->post('b894', TRUE);
        $b895 = $this->input->post('b895', TRUE);
        $b210 = $this->input->post('b210', TRUE);
        $asam_phospat = $this->input->post('asam_phospat', TRUE);
        $blotong = $this->input->post('blotong', TRUE);

        $this->data_bahankimia->updateData($id, $belerang, $kapur, $floc_total, $naoh_evap, $bulab, $diial, $b894, $b895, $b210, $asam_phospat, $blotong);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/data_bahankimia_control'));
    }

    public function delete_data_bahankimia($id)
    {   
        $this->data_bahankimia->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/data_bahankimia_control'));
    }
}
