<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_pi extends CI_Model {

    public function defineTable()
    {
        return 'analisa_pi';
    }
    
    public function createData($p1, $p2, $pi)
    {
        $table = $this->defineTable();
        $data = array(
            'p1' => $p1,
            'p2' => $p2,
            'pi' => $pi,
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

    public function updateData($id, $p1, $p2, $pi)
    {   
        $table = $this->defineTable();
        $data = array(
            'p1' => $p1,
            'p2' => $p2,
            'pi' => $pi,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id' => $id));
    }
}
