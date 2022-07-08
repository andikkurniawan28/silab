<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ID_Sampel_Model extends CI_Model {

    public function getIDForGilingan()
    {
        return array(13,14,15,16);
        /*
            13 -> Nira Gilingan 2
            14 -> Nira Gilingan 3
            15 -> Nira Gilingan 4
            16 -> Nira Gilingan 5
        */
    }

    public function getIDForAmpasGilingan()
    {
        return array(26,27,28,29,30);
        /*
            26 -> Ampas Gilingan 1
            27 -> Ampas Gilingan 2
            28 -> Ampas Gilingan 3
            29 -> Ampas Gilingan 4
            30 -> Ampas Gilingan 5
        */
    }

    public function getIDForNiraPemurnian()
    {
        return array(17,19,20,21,23,24);
        /*
            17 -> Nira Mentah
            19 -> Nira Mentah Sulfitasi
            20 -> Nira Encer
            21 -> Nira Tapis
            23 -> Nira Kental
            24 -> Nira Kental Sulfitasi 
        */
    }

    public function getIDForBlotong()
    {
        return array(1,2,25,89,90,91,98);
        /*
            1  -> Blotong Truk Timur
            2  -> Blotong Truk Barat
            25 -> Blotong RVF 1
            89 -> Blotong RVF 2
            90 -> Blotong RVF 3
            91 -> Blotong RVF 4
            98 -> Blotong Request
        */
    }

    public function getIDForPenguapan()
    {
        return array(69,70,71,72,73,74);
        /*
            69 -> Pre-Evap
            70 -> Evap1
            71 -> Evap2
            72 -> Evap3
            73 -> Evap4
            74 -> Evap5
        */
    }

    public function getIDForDRK()
    {
        return array(68,33,34,35);
        /*
            68 -> Remelter In
            33 -> Carbonated Liquor
            34 -> Reaction Tank
            35 -> Clear Liquor
        */
    }

    public function getIDForCake()
    {
        return array(36,78,79);
        /*
            36 -> Cake Head
            78 -> Cake Mid
            79 -> Cake End
        */
    }

    public function getIDForMasakan()
    {
        return array();
    }

    public function getIDForStroop()
    {
        return array();
    }

    public function getIDForGula()
    {
        return array();
    }

}
