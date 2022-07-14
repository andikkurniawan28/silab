<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moisture extends CI_Model {
    
    public function createData($bahan, $kadar_air)
    {
        $waktu = date('Y-m-d H:i');
        $this->db->query("insert into `moisture`
            (`waktu`, `bahan`, `kadar_air`) values
            ('$waktu', $bahan, $kadar_air)");
    }

    public function readData()
    {
        return $this->db->query("select * from `moisture` order by `id` desc limit 0,600")->result();
    }

    public function updateData($id, $bahan, $kadar_air)
    {   
        $this->db->query("update `moisture` set `bahan`= '$bahan', `kadar_air`= $kadar_air where `id` = '$id'");
    }

    public function deleteData($id)
    {
        $this->db->query("delete from `moisture` where `id` = '$id'");
    }
}
