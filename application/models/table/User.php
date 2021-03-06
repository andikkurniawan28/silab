<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function defineTable()
    {
        return 'user';
    }

    public function createData($username, $password, $nama, $role)
    {
        $table = $this->defineTable();
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'role' => $role,
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

    public function updateData($id, $username, $password, $nama, $role)
    {   
        $table = $this->defineTable();
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'role' => $role,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }

    public function checkUser($username, $password)
    {
        $table = $this->defineTable();
        return $this->db->get_where($table, 
            array(
                'username' => $username, 
                'password' => $password
            ));
    }

}
