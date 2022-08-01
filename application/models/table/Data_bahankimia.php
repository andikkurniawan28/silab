<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bahankimia extends CI_Model {

    public function defineTable()
    {
        return 'data_bahankimia';
    }
    
    public function createData($belerang, $kapur, $floc_total, $naoh_evap, $bulab, $diial, $b894, $b895, $b210, $asam_phospat, $blotong)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'belerang' => $belerang,
            'kapur' => $kapur,
            'floc_total' => $floc_total,
            'naoh_evap' => $naoh_evap,
            'bulab' => $bulab,
            'diial' => $diial,
            'b894' => $b894,
            'b895' => $b895,
            'b210' => $b210,
            'asam_phospat' => $asam_phospat,
            'blotong' => $blotong,
        );
        $this->db->insert($table, $data);
    }

    public function readData()
    {
        $table = $this->defineTable();
        $this->db->from($table);
        $this->db->limit('5000');
        $this->db->order_by('id_analisa','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateData($id, $belerang, $kapur, $floc_total, $naoh_evap, $bulab, $diial, $b894, $b895, $b210, $asam_phospat, $blotong)
    {   
        $table = $this->defineTable();
        $data = array(
            'belerang' => $belerang,
            'kapur' => $kapur,
            'floc_total' => $floc_total,
            'naoh_evap' => $naoh_evap,
            'bulab' => $bulab,
            'diial' => $diial,
            'b894' => $b894,
            'b895' => $b895,
            'b210' => $b210,
            'asam_phospat' => $asam_phospat,
            'blotong' => $blotong,
        );
        $this->db->update($table, $data, array('id_analisa' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id_analisa'=>$id));
    }
}
