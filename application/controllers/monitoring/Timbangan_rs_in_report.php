<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbangan_rs_in_report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->checkUserIsLogin();
        $this->load->model('table/timbangan_rs_in');
    }

	public function checkUserIsLogin()
	{
		if($this->session->status != 'login')
		redirect(base_url('auth'));
	}

	public function index()
	{
        $data['page_title'] = ucfirst("Timbangan RS In");
        $data['hasil_analisa'] = $this->timbangan_rs_in->readData();
        $data['total_kemarin'] = $this->timbangan_rs_in->totalYesterday(date('Y-m-d 5:00:00'));
        $data['total_sd_kemarin'] = $this->timbangan_rs_in->totalUntilYesterday(date('Y-m-d 5:00:00'));
        $data['total_sd_hari_ini'] = $this->timbangan_rs_in->totalUntilToday(date('Y-m-d 5:00:00'));
        $data['total_sd_saat_ini'] = $this->timbangan_rs_in->totalUntilNow();

		for($i=0; $i<24; $i++)
		{
			$data['total_per_jam'][$i] = $this->timbangan_rs_in->totalPerHour(date('Y-m-d '.$i.':00'));
		}

        $this->load->view('static/header', $data);
		$this->load->view('monitoring/timbangan_rs_in/main',$data);
		$this->load->view('static/footer');
	}
}
