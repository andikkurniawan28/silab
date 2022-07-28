<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_ketel extends CI_Model {

    public function defineTable()
    {
        return 'analisa_ketel';
    }
    
    public function createData($sadah_jj, $tds_jj, $ph_jj, $phospat_jj, $tds_djj, $ph_djj, 
        $sadah_y1, $tds_y1, $ph_y1, $phospat_y1, $sadah_y2, $tds_y2, $ph_y2, $phospat_y2, $tds_dy, $ph_dy,
        $sadah_hw, $tds_hw, $ph_hw, $sadah_wtp, $tds_wtp, $ph_wtp, $volume_tangki1, $volume_tangki2)
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'sadah_jj' => $sadah_jj,
            'tds_jj' => $tds_jj,
            'ph_jj' => $ph_jj,
            'phospat_jj' => $phospat_jj,
            'tds_djj' => $tds_djj,
            'ph_djj' => $ph_djj,
            'sadah_y1' => $sadah_y1,
            'tds_y1' => $tds_y1,
            'ph_y1' => $ph_y1,
            'phospat_y1' => $phospat_y1,
            'sadah_y2' => $sadah_y2,
            'tds_y2' => $tds_y2,
            'ph_y2' => $ph_y2,
            'phospat_y2' => $phospat_y2,
            'tds_dy' => $tds_dy,
            'ph_dy' => $ph_dy,
            'sadah_hw' => $sadah_hw,
            'tds_hw' => $tds_hw,
            'ph_hw' => $ph_hw,
            'sadah_wtp' => $sadah_wtp,
            'tds_wtp' => $tds_wtp,
            'ph_wtp' => $ph_wtp,
            'volume_tangki1' => $volume_tangki1,
            'volume_tangki2' => $volume_tangki2,
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

    public function updateData($id, $sadah_jj, $tds_jj, $ph_jj, $phospat_jj, $tds_djj, $ph_djj, 
        $sadah_y1, $tds_y1, $ph_y1, $phospat_y1, $sadah_y2, $tds_y2, $ph_y2, $phospat_y2, $tds_dy, $ph_dy,
        $sadah_hw, $tds_hw, $ph_hw, $sadah_wtp, $tds_wtp, $ph_wtp, $volume_tangki1, $volume_tangki2
    )
    {   
        $table = $this->defineTable();
        $data = array(
            'sadah_jj' => $sadah_jj,
            'tds_jj' => $tds_jj,
            'ph_jj' => $ph_jj,
            'phospat_jj' => $phospat_jj,
            'tds_djj' => $tds_djj,
            'ph_djj' => $ph_djj,
            'sadah_y1' => $sadah_y1,
            'tds_y1' => $tds_y1,
            'ph_y1' => $ph_y1,
            'phospat_y1' => $phospat_y1,
            'sadah_y2' => $sadah_y2,
            'tds_y2' => $tds_y2,
            'ph_y2' => $ph_y2,
            'phospat_y2' => $phospat_y2,
            'tds_dy' => $tds_dy,
            'ph_dy' => $ph_dy,
            'sadah_hw' => $sadah_hw,
            'tds_hw' => $tds_hw,
            'ph_hw' => $ph_hw,
            'sadah_wtp' => $sadah_wtp,
            'tds_wtp' => $tds_wtp,
            'ph_wtp' => $ph_wtp,
            'volume_tangki1' => $volume_tangki1,
            'volume_tangki2' => $volume_tangki2,
        );
        $this->db->update($table, $data, array('id_analisa' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id_analisa' => $id));
    }
}
