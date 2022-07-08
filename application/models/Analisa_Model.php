<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_Model extends CI_Model {

    public function getAnalisaNppLatest5()
    {
        return $this->db->query("select * from `analisa_npp` order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaBrixPolLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `saccharomat` where `bahan` between $min_id and $max_id order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaAmpasLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `analisa_ampas` where `bahan` between $min_id and $max_id order by `id` desc limit 0,5")->result();
    }

}
