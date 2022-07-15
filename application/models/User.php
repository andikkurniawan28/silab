<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function checkUser($username, $password)
    {
        return $this->db->get_where('user', 
            array(
                'username' => $username, 
                'password' => $password
            ));
    }

}
