<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_control extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
		$this->checkUserIsAdmin();
        $this->load->model('table/user');
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
        $data['page_title'] = ucfirst("User");
        $data['hasil_analisa'] = $this->user->readData();
        $data['form_handler_create'] = base_url('input_data/user_control/create_user/');
        $data['form_handler_update'] = base_url('input_data/user_control/edit_user/');
        $data['form_handler_delete'] = base_url('input_data/user_control/delete_user/');

        $this->load->view('static/header', $data);
		$this->load->view('input_data/user/main',$data);
		$this->load->view('input_data/user/modal',$data);
		$this->load->view('static/footer');
	}

    public function edit_user($id, $username, $password, $nama, $role)
    {
        $data['page_title'] = ucfirst("User");
        $data['form_handler_update'] = base_url('input_data/user_control/update_user/');
        $data['id'] = $id;
        $data['username'] = $username;
        $data['password'] = $password;
        $data['nama'] = $nama;
        $data['role'] = $role;

        $this->load->view('static/header',$data);
		$this->load->view('input_data/user/edit',$data);
		$this->load->view('static/footer');
    }

    public function create_user()
    {
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $nama = $this->input->post('nama', TRUE);
        $role = $this->input->post('role', TRUE);

        $this->user->createData($username, $password, $nama, $role);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil ditambahkan.
        </div>");

        redirect(base_url('input_data/user_control'));
    }

    public function update_user()
    {
        $id = $this->input->post('id', TRUE);
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $nama = $this->input->post('nama', TRUE);
        $role = $this->input->post('role', TRUE);

        $this->user->updateData($id, $username, $password, $nama, $role);
        $this->session->set_flashdata("message", "<div class='alert alert-success' role='alert'>
            Data berhasil dirubah.
        </div>");

        redirect(base_url('input_data/user_control'));
    }

    public function delete_user($id)
    {   
        $this->user->deleteData($id);
        $this->session->set_flashdata("message", "<div class='alert alert-danger' role='alert'>
            Data berhasil dihapus.
        </div>");

        redirect(base_url('input_data/user_control'));
    }
}
