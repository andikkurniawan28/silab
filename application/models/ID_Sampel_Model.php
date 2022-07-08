<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ID_Sampel_Model extends CI_Model {

    public function getIDForGilingan()
    {
        return array(13,14,15,16);
    }

    public function getIDForAmpasGilingan()
    {
        return array(26,27,28,29,30);
    }

    public function getIDForNiraPemurnian()
    {
        return array(17,19,20,21,23,24);
    }

    public function getIDForBlotong()
    {
        return array(1,2,25,89,90,91,98);
    }

}
