<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saccharomat extends CI_Model {
    
    public function createData($bahan, $brix, $pol, $Z, $hk)
    {
        $waktu = date('Y-m-d H:i');
        $this->db->query("insert into `saccharomat`
            (`waktu`, `bahan`, `brix`, `pol`, `Z`, `hk`) values
            ('$waktu', $bahan, $brix, $pol, $Z, $hk)");
    }

    public function readData()
    {
        return $this->db->query("select * from `saccharomat` order by `id` desc limit 0,600")->result();
    }

    public function updateData($id, $bahan, $brix, $pol, $Z, $hk)
    {   
        $this->db->query("update `saccharomat` set 
            `bahan`= $bahan, `brix`= $brix, `pol`= $pol, `Z` = $Z, `hk`= $hk 
            where `id` = '$id'");
    }

    public function deleteData($id)
    {
        $this->db->query("delete from `saccharomat` where `id` = $id");
    }
}
