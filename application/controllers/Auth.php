<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
    }

	public function index()
	{
		$this->load->view('auth/login');
	}

    public function proses_login()
    {
        $username   = $this->input->post('username', TRUE);
        $password   = md5($this->input->post('password', TRUE));
        $check_user = $this->Auth_Model->checkUser($username, $password);

        if($check_user->num_rows() > 0)
        {
            foreach($check_user->result() as $user)
            {
                $this->session->set_userdata('nama', $user->nama);
                $this->session->set_userdata('role', $user->role);
                $this->session->set_userdata('status', 'login');
                redirect(base_url());
            }
        }
        else
        {
            $this->session->set_flashdata('message', "<div class='alert alert-danger' role='alert'>Username/password salah, ulangi lagi!</div>");
            redirect(base_url('auth'));
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
