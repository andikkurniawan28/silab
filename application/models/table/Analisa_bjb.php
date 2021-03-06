<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imbibisi extends CI_Model {

    public function defineTable()
    {
        return 'imbibisi';
    }
    
    public function createData($totalizer, $flow_imb)
    {
        $table = $this->defineTable();
        $data = array(
            'totalizer' => $totalizer,
            'flow_imb' => $flow_imb,
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

    public function updateData($id, $totalizer, $flow_imb)
    {   
        $table = $this->defineTable();
        $data = array(
            'totalizer' => $totalizer,
            'flow_imb' => $flow_imb,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
