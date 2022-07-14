<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olah_Data extends CI_Controller {

    public function instanQuery()
    {
        $query = $this->input->post('query');
        $this->db->query($query);
        
    }

}
