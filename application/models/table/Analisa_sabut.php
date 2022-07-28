<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_sabut extends CI_Model {

    public function defineTable()
    {
        return 'analisa_sabut';
    }
    
    public function createData($sabut_basah, $sabut_kering, $kadar_sabut)
    {
        $table = $this->defineTable();
        $data = array(
            'sabut_basah' => $sabut_basah,
            'sabut_kering' => $sabut_kering,
            'kadar_sabut' => $kadar_sabut,
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

    public function updateData($id, $sabut_basah, $sabut_kering, $kadar_sabut)
    {   
        $table = $this->defineTable();
        $data = array(
            'sabut_basah' => $sabut_basah,
            'sabut_kering' => $sabut_kering,
            'kadar_sabut' => $kadar_sabut,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }
}
