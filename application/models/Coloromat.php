<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coloromat extends CI_Model {
    
    public function createData($bahan, $IU)
    {
        $waktu = date('Y-m-d H:i');
        $this->db->query("insert into `coloromat`
            (`waktu`, `bahan`, `IU`) values
            ('$waktu', $bahan, $IU)");
    }

    public function readData()
    {
        return $this->db->query("select * from `coloromat` order by `id` desc limit 0,600")->result();
    }

    public function updateData($id, $bahan, $IU)
    {   
        $this->db->query("update `coloromat` set `bahan`= '$bahan', `IU`= $IU where `id` = '$id'");
    }

    public function deleteData($id)
    {
        $this->db->query("delete from `coloromat` where `id` = '$id'");
    }
}
