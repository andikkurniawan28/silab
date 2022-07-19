<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id_sampel extends CI_Model {

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
        return array(65,53,56,57,48,82);
        /*
            65 -> Masakan A
            53 -> Masakan A Raw
            56 -> Masakan C
            57 -> Masakan C
            48 -> Masakan R1
            82 -> Masakan R2
        */
    }

    public function getIDForStroop()
    {
        return array(83,47,52,41,50,55,59,60,40,61);
        /*
            83 -> Klare RS
            47 -> R1 Mol
            52 -> R2 Mol
            41 -> Remelter A
            50 -> Remelter CD
            55 -> Stroop A
            59 -> Stroop C
            60 -> Klare D
            40 -> Klare SHS
            61 -> Tetes
        */
    }

    public function getIDForGula()
    {
        return array(51,84,54,39,62,63,64,46);
        /*
            51 -> Gula R1
            84 -> Gula R2
            54 -> Gula A Raw
            39 -> Gula RS
            62 -> Gula C
            63 -> Gula D1
            64 -> Gula D2
            46 -> Gula SHS
        */
    }

    public function getIDForRS()
    {
        return array(37,42);
        /*
            37 -> Raw Sugar Kedatangan
            42 -> Raw Sugar Silo
        */
    }

    public function getIDForTetes()
    {
        return array(75,92,77,93,76);
        /*
            75 -> Tangki1
            92 -> Tangki2
            77 -> Tangki3
            93 -> Kumpulan
            76 -> Tandon
        */
    }

}
