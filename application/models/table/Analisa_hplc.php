<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_hplc extends CI_Model {

    public function defineTable()
    {
        return 'analisa_hplc';
    }
    
    public function createData($bahan, $fruktosa, $glukosa, $sukrosa)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'bahan' => $bahan,
            'fruktosa' => $fruktosa,
            'glukosa' => $glukosa,
            'sukrosa' => $sukrosa,
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

    public function updateData($id, $bahan, $fruktosa, $glukosa, $sukrosa)
    {   
        $table = $this->defineTable();
        $data = array(
            'bahan' => $bahan,
            'fruktosa' => $fruktosa,
            'glukosa' => $glukosa,
            'sukrosa' => $sukrosa,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
