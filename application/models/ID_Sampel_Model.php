<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ID_Sampel_Model extends CI_Model {

    public function getIdForGilingan()
    {
        return array(13,14,15,16);
    }

    public function getIDForAmpasGilingan()
    {
        return array(26,27,28,29, 30);
    }

}
