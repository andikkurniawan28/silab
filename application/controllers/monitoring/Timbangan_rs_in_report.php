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
		$time = date('Y-m-d 5:00:00');
		$now  = date('Y-m-d');
		$yesterday = date('Y-m-d', strtotime('-1 days', strtotime($now)));

        $data['page_title'] = ucfirst("Timbangan RS In");
        $data['hasil_analisa'] = $this->timbangan_rs_in->readDataLimit();
        $data['total_kemarin'] = $this->timbangan_rs_in->totalYesterday($time);
        $data['total_sd_kemarin'] = $this->timbangan_rs_in->totalUntilYesterday($time);
        $data['total_sd_hari_ini'] = $this->timbangan_rs_in->totalUntilToday($time);
        $data['total_sd_saat_ini'] = $this->timbangan_rs_in->totalUntilNow();

		for($i=0; $i<24; $i++)
		{
			$data['total_per_jam'][$i] = $this->timbangan_rs_in->totalPerHour(date('Y-m-d '.$i.':00'));
		}

		$data['shift_pagi_kemarin'] = $this->timbangan_rs_in->totalPerShift($yesterday.' 5:00');
		$data['shift_siang_kemarin'] = $this->timbangan_rs_in->totalPerShift($yesterday.' 13:00');
		$data['shift_malam_kemarin'] = $this->timbangan_rs_in->totalPerShift($yesterday.' 21:00');
		
		$data['shift_pagi_hari_ini'] = $this->timbangan_rs_in->totalPerShift($now.' 5:00');
		$data['shift_siang_hari_ini'] = $this->timbangan_rs_in->totalPerShift($now.' 13:00');
		$data['shift_malam_hari_ini'] = $this->timbangan_rs_in->totalPerShift($now.' 21:00');

        $this->load->view('static/header', $data);
		$this->load->view('monitoring/timbangan_rs_in/main',$data);
		$this->load->view('static/footer');
	}
}
