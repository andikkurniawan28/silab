<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_kapur extends CI_Model {

    public function defineTable()
    {
        return 'analisa_kapur';
    }
    
    public function createData($kapur, $supplier, $evaluasi)
    {
        $table = $this->defineTable();
        $data = array(
            'kapur' => $kapur,
            'supplier' => $supplier,
            'evaluasi' => $evaluasi,
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

    public function updateData($id, $kapur, $supplier, $evaluasi)
    {   
        $table = $this->defineTable();
        $data = array(
            'kapur' => $kapur,
            'supplier' => $supplier,
            'evaluasi' => $evaluasi,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id' => $id));
    }
}
