<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_keliling extends CI_Model {

    public function defineTable()
    {
        return 'data_keliling';
    }
    
    public function createData(
        $tekanan_hpreevap1, 
        $tekanan_hpreevap2,
        $tekanan_hevap1,
        $tekanan_hevap2,
        $tekanan_hevap3,
        $tekanan_hevap4,
        $tekanan_hevap5,
        $tekanan_hevap6,
        $tekanan_hevap7,
        $tekanan_hmasakan1,
        $tekanan_hmasakan2,
        $tekanan_hmasakan3,
        $tekanan_hmasakan4,
        $tekanan_hmasakan5,
        $tekanan_hmasakan6,
        $tekanan_hmasakan7,
        $tekanan_hmasakan8,
        $tekanan_hmasakan9,
        $tekanan_hmasakan10,
        $tekanan_hmasakan11,
        $tekanan_hmasakan12,
        $tekanan_hmasakan13,
        $tekanan_hmasakan14,
        $tekanan_hmasakan15,
        $tekanan_hmasakan16,
        $tekanan_hmasakan17,
        $tekanan_hmasakan18,
        $tekanan_pompamasak,
        $suhu_uappreevap1,
        $suhu_uappreevap2,
        $suhu_uapevap1,
        $suhu_uapevap2,
        $suhu_uapevap3,
        $suhu_uapevap4,
        $suhu_uapevap5,
        $suhu_uapevap6,
        $suhu_uapevap7,
        $suhu_heater1,
        $suhu_heater2,
        $suhu_heater3,
        $suhu_airinjeksi,
        $suhu_airterjun,
        $tekanan_uaptinggi,
        $tekanan_uaprendah,
        $tekanan_uapbekas
    )
    {
        $table = $this->defineTable();
        $data = array(
            'waktu' => date('Y-m-d H:i'),
            'tekanan_hpreevap1' => $tekanan_hpreevap1,
            'tekanan_hpreevap2' => $tekanan_hpreevap2,
            'tekanan_hevap1' => $tekanan_hevap1,
            'tekanan_hevap2' => $tekanan_hevap2,
            'tekanan_hevap3' => $tekanan_hevap3,
            'tekanan_hevap4' => $tekanan_hevap4,
            'tekanan_hevap5' => $tekanan_hevap5,
            'tekanan_hevap6' => $tekanan_hevap6,
            'tekanan_hevap7' => $tekanan_hevap7,
            'tekanan_hmasakan1' => $tekanan_hmasakan1,
            'tekanan_hmasakan2' => $tekanan_hmasakan2,
            'tekanan_hmasakan3' => $tekanan_hmasakan3,
            'tekanan_hmasakan4' => $tekanan_hmasakan4,
            'tekanan_hmasakan5' => $tekanan_hmasakan5,
            'tekanan_hmasakan6' => $tekanan_hmasakan6,
            'tekanan_hmasakan7' => $tekanan_hmasakan7,
            'tekanan_hmasakan8' => $tekanan_hmasakan8,
            'tekanan_hmasakan9' => $tekanan_hmasakan9,
            'tekanan_hmasakan10' => $tekanan_hmasakan10,
            'tekanan_hmasakan11' => $tekanan_hmasakan11,
            'tekanan_hmasakan12' => $tekanan_hmasakan12,
            'tekanan_hmasakan13' => $tekanan_hmasakan13,
            'tekanan_hmasakan14' => $tekanan_hmasakan14,
            'tekanan_hmasakan15' => $tekanan_hmasakan15,
            'tekanan_hmasakan16' => $tekanan_hmasakan16,
            'tekanan_hmasakan17' => $tekanan_hmasakan17,
            'tekanan_hmasakan18' => $tekanan_hmasakan18,
            'tekanan_pompamasak' => $tekanan_pompamasak,
            'suhu_uappreevap1' => $suhu_uappreevap1,
            'suhu_uappreevap2' => $suhu_uappreevap2,
            'suhu_uapevap1' => $suhu_uapevap1,
            'suhu_uapevap2' => $suhu_uapevap2,
            'suhu_uapevap3' => $suhu_uapevap3,
            'suhu_uapevap4' => $suhu_uapevap4,
            'suhu_uapevap5' => $suhu_uapevap5,
            'suhu_uapevap6' => $suhu_uapevap6,
            'suhu_uapevap7' => $suhu_uapevap7,
            'suhu_heater1' => $suhu_heater1,
            'suhu_heater2' => $suhu_heater2,
            'suhu_heater3' => $suhu_heater3,
            'suhu_airinjeksi' => $suhu_airinjeksi,
            'suhu_airterjun' => $suhu_airterjun,
            'tekanan_uaptinggi' => $tekanan_uaptinggi,
            'tekanan_uaprendah' => $tekanan_uaprendah,
            'tekanan_uapbekas' => $tekanan_uapbekas,
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

    public function updateData(
        $id, 
        $tekanan_hpreevap1, 
        $tekanan_hpreevap2,
        $tekanan_hevap1,
        $tekanan_hevap2,
        $tekanan_hevap3,
        $tekanan_hevap4,
        $tekanan_hevap5,
        $tekanan_hevap6,
        $tekanan_hevap7,
        $tekanan_hmasakan1,
        $tekanan_hmasakan2,
        $tekanan_hmasakan3,
        $tekanan_hmasakan4,
        $tekanan_hmasakan5,
        $tekanan_hmasakan6,
        $tekanan_hmasakan7,
        $tekanan_hmasakan8,
        $tekanan_hmasakan9,
        $tekanan_hmasakan10,
        $tekanan_hmasakan11,
        $tekanan_hmasakan12,
        $tekanan_hmasakan13,
        $tekanan_hmasakan14,
        $tekanan_hmasakan15,
        $tekanan_hmasakan16,
        $tekanan_hmasakan17,
        $tekanan_hmasakan18,
        $tekanan_pompamasak,
        $suhu_uappreevap1,
        $suhu_uappreevap2,
        $suhu_uapevap1,
        $suhu_uapevap2,
        $suhu_uapevap3,
        $suhu_uapevap4,
        $suhu_uapevap5,
        $suhu_uapevap6,
        $suhu_uapevap7,
        $suhu_heater1,
        $suhu_heater2,
        $suhu_heater3,
        $suhu_airinjeksi,
        $suhu_airterjun,
        $tekanan_uaptinggi,
        $tekanan_uaprendah,
        $tekanan_uapbekas
    )
    {   
        $table = $this->defineTable();
        $data = array(
            'tekanan_hpreevap1' => $tekanan_hpreevap1,
            'tekanan_hpreevap2' => $tekanan_hpreevap2,
            'tekanan_hevap1' => $tekanan_hevap1,
            'tekanan_hevap2' => $tekanan_hevap2,
            'tekanan_hevap3' => $tekanan_hevap3,
            'tekanan_hevap4' => $tekanan_hevap4,
            'tekanan_hevap5' => $tekanan_hevap5,
            'tekanan_hevap6' => $tekanan_hevap6,
            'tekanan_hevap7' => $tekanan_hevap7,
            'tekanan_hmasakan1' => $tekanan_hmasakan1,
            'tekanan_hmasakan2' => $tekanan_hmasakan2,
            'tekanan_hmasakan3' => $tekanan_hmasakan3,
            'tekanan_hmasakan4' => $tekanan_hmasakan4,
            'tekanan_hmasakan5' => $tekanan_hmasakan5,
            'tekanan_hmasakan6' => $tekanan_hmasakan6,
            'tekanan_hmasakan7' => $tekanan_hmasakan7,
            'tekanan_hmasakan8' => $tekanan_hmasakan8,
            'tekanan_hmasakan9' => $tekanan_hmasakan9,
            'tekanan_hmasakan10' => $tekanan_hmasakan10,
            'tekanan_hmasakan11' => $tekanan_hmasakan11,
            'tekanan_hmasakan12' => $tekanan_hmasakan12,
            'tekanan_hmasakan13' => $tekanan_hmasakan13,
            'tekanan_hmasakan14' => $tekanan_hmasakan14,
            'tekanan_hmasakan15' => $tekanan_hmasakan15,
            'tekanan_hmasakan16' => $tekanan_hmasakan16,
            'tekanan_hmasakan17' => $tekanan_hmasakan17,
            'tekanan_hmasakan18' => $tekanan_hmasakan18,
            'tekanan_pompamasak' => $tekanan_pompamasak,
            'suhu_uappreevap1' => $suhu_uappreevap1,
            'suhu_uappreevap2' => $suhu_uappreevap2,
            'suhu_uapevap1' => $suhu_uapevap1,
            'suhu_uapevap2' => $suhu_uapevap2,
            'suhu_uapevap3' => $suhu_uapevap3,
            'suhu_uapevap4' => $suhu_uapevap4,
            'suhu_uapevap5' => $suhu_uapevap5,
            'suhu_uapevap6' => $suhu_uapevap6,
            'suhu_uapevap7' => $suhu_uapevap7,
            'suhu_heater1' => $suhu_heater1,
            'suhu_heater2' => $suhu_heater2,
            'suhu_heater3' => $suhu_heater3,
            'suhu_airinjeksi' => $suhu_airinjeksi,
            'suhu_airterjun' => $suhu_airterjun,
            'tekanan_uaptinggi' => $tekanan_uaptinggi,
            'tekanan_uaprendah' => $tekanan_uaprendah,
            'tekanan_uapbekas' => $tekanan_uapbekas,
        );
        $this->db->update($table, $data, array('id_analisa' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id_analisa'=>$id));
    }
}
