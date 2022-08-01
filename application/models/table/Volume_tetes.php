<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volume_tetes extends CI_Model {

    public function defineTable()
    {
        return 'volume_tetes';
    }
    
    public function createData($tanggal, $volume_t1, $meteran_t1, $volume_t2, $meteran_t2, $volume_t3, $meteran_t3, $volume_t4, $meteran_t4)
    {
        $table = $this->defineTable();
        $data = array(
            'tanggal' => date('Y-m-d H:i'),
            'volume_t1' => $volume_t1,
            'meteran_t1' => $meteran_t1,
            'volume_t2' => $volume_t2,
            'meteran_t2' => $meteran_t2,
            'volume_t3' => $volume_t3,
            'meteran_t3' => $meteran_t3,
            'volume_t4' => $volume_t4,
            'meteran_t4' => $meteran_t4,
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

    public function updateData($id, $tanggal, $volume_t1, $meteran_t1, $volume_t2, $meteran_t2, $volume_t3, $meteran_t3, $volume_t4, $meteran_t4)
    {   
        $table = $this->defineTable();
        $data = array(
            'tanggal' => $tanggal,
            'volume_t1' => $volume_t1,
            'meteran_t1' => $meteran_t1,
            'volume_t2' => $volume_t2,
            'meteran_t2' => $meteran_t2,
            'volume_t3' => $volume_t3,
            'meteran_t3' => $meteran_t3,
            'volume_t4' => $volume_t4,
            'meteran_t4' => $meteran_t4,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
