<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class imbibisi extends CI_Model {

    public function defineTable()
    {
        return 'imbibisi';
    }
    
    public function createData($totalizer_imb, $flow_imb)
    {
        $table = $this->defineTable();
        $data = array(
            'totalizer_imb' => $totalizer_imb,
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

    public function updateData($id, $totalizer_imb, $flow_imb)
    {   
        $table = $this->defineTable();
        $data = array(
            'totalizer_imb' => $totalizer_imb,
            'flow_imb' => $flow_imb,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }

    public function getLasttotalizer_imb()
    {
        $table = $this->defineTable();
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($table);
        foreach($query->result() as $result)
        {
            $data = $result->totalizer_imb;
        }
        return $data;
    }
}
