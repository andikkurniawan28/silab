<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_nira_kotor extends CI_Model {

    public function defineTable()
    {
        return 'analisa_nira_kotor';
    }
    
    public function createData($ph, $brix, $suhu)
    {
        $table = $this->defineTable();
        $data = array(
            'ph' => $ph,
            'brix' => $brix,
            'suhu' => $suhu,
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

    public function updateData($id, $ph, $brix, $suhu)
    {   
        $table = $this->defineTable();
        $data = array(
            'ph' => $ph,
            'brix' => $brix,
            'suhu' => $suhu,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id' => $id));
    }
}
