<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_so2 extends CI_Model {

    public function defineTable()
    {
        return 'analisa_so2';
    }
    
    public function createData($bahan, $so2)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'bahan' => $bahan,
            'so2' => $so2,
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

    public function updateData($id, $bahan, $so2)
    {   
        $table = $this->defineTable();
        $data = array(
            'bahan' => $bahan,
            'so2' => $so2,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
