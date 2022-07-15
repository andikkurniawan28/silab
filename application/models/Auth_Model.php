<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    public function checkUser($username, $password)
    {
        return $this->db->get_where('user', 
            array(
                'username' => $username, 
                'password' => $password
            ));
    }

}
