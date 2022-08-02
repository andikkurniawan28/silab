<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_timbangan extends CI_Model {

    public function defineTable()
    {
        return 'data_timbangan';
    }
    
    public function createData($berat_tebu, $totalizer, $flow_nm, $nm_tebu)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'berat_tebu' => $berat_tebu,
            'totalizer' => $totalizer,
            'flow_nm' => $flow_nm,
            'nm_tebu' => $nm_tebu,
        );
        $this->db->insert($table, $data);
    }

    public function readData()
    {
        $table = $this->defineTable();
        $this->db->from($table);
        $this->db->limit('5000');
        $this->db->order_by('kode_analisa','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateData($id, $berat_tebu, $totalizer, $flow_nm, $nm_tebu)
    {   
        $table = $this->defineTable();
        $data = array(
            'berat_tebu' => $berat_tebu,
            'totalizer' => $totalizer,
            'flow_nm' => $flow_nm,
            'nm_tebu' => $nm_tebu,
        );
        $this->db->update($table, $data, array('kode_analisa' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('kode_analisa'=>$id));
    }

    public function getLastTotalizer()
    {
        $table = $this->defineTable();
        $this->db->order_by('kode_analisa', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($table);
        foreach($query->result() as $result)
        {
            $data = $result->totalizer;
        }
        return $data;
    }
}
