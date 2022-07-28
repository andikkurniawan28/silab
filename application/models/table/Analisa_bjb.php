<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_bjb extends CI_Model {

    public function defineTable()
    {
        return 'analisa_bjb';
    }
    
    public function createData($bahan, $bjb)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'bahan' => $bahan,
            'bjb' => $bjb,
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

    public function updateData($id, $bahan, $bjb)
    {   
        $table = $this->defineTable();
        $data = array(
            'bahan' => $bahan,
            'bjb' => $bjb,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
