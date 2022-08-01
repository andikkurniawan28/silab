<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbangan_rs_in extends CI_Model {

    public function defineTable()
    {
        return 'timbangan_rs_in';
    }
    
    public function createData($bruto, $tara, $netto)
    {
        $table = $this->defineTable();
        $data = array(
            'time' => date('Y-m-d H:i'),
            'bruto' => $bruto,
            'tara' => $tara,
            'netto' => $netto,
        );
        $this->db->insert($table, $data);
    }

    public function readData()
    {
        $table = $this->defineTable();
        $this->db->from($table);
        $this->db->limit('5000');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateData($id, $time, $bruto, $tara, $netto)
    {   
        $table = $this->defineTable();
        $data = array(
            'time' => $time,
            'bruto' => $bruto,
            'tara' => $tara,
            'netto' => $netto,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
