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
        return array(68,34,33,35);
        /*
            68 -> Remelter In
            34 -> Reaction Tank
            33 -> Carbonated Liquor
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
        return array(65,53,56,57,48,82,38,31,32,44,45,49,58);
        /*
            65 -> Masakan A
            53 -> Masakan A Raw
            56 -> Masakan C
            57 -> Masakan C
            48 -> Masakan R1
            82 -> Masakan R2
            38 -> Masakan RS
            31 -> CVP C
            32 -> CVP D
            44 -> Einwuurf C
            45 -> Einwuurf D
            49 -> Sogokan C
            58 -> Sogokan D
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

    public function identifyID($id)
    {
        switch($id)
        {
            case 1  : $data = 'Blotong Truk Timur'; break;
            case 2  : $data = 'Blotong Truk Barat'; break;
            case 3  : $data = 'Not Registered'; break;
            case 4  : $data = 'Not Registered'; break;
            case 5  : $data = 'Not Registered'; break;
            case 6  : $data = 'Not Registered'; break;
            case 7  : $data = 'Not Registered'; break;
            case 8  : $data = 'Not Registered'; break;
            case 9  : $data = 'Not Registered'; break;
            case 10 : $data = 'Not Registered'; break;
            case 11 : $data = 'Not Registered'; break;
            case 12 : $data = "Nira Gilingan 1"; break;
            case 13 : $data = "Nira Gilingan 2"; break;
            case 14 : $data = "Nira Gilingan 3"; break;
            case 15 : $data = "Nira Gilingan 4"; break;
            case 16 : $data = "Nira Gilingan 5"; break; 
            case 17 : $data = "Nira Mentah"; break;
            case 18 : $data = 'Not Registered'; break;
            case 19 : $data = "Nira Mentah Sulfitasi"; break;
            case 20 : $data = "Nira Encer"; break;
            case 21 : $data = "Nira Tapis"; break;
            case 22 : $data = 'Not Registered'; break;
            case 23 : $data = "Nira Kental"; break; 
            case 24 : $data = "Nira Kental Sulfitasi"; break; 
            case 25 : $data = 'Blotong RVF 1'; break; 
            case 26 : $data = "Ampas Gilingan 1"; break;
            case 27 : $data = "Ampas Gilingan 2"; break;
            case 28 : $data = "Ampas Gilingan 3"; break;
            case 29 : $data = "Ampas Gilingan 4"; break;
            case 30 : $data = "Ampas Gilingan 5"; break; 
            case 31 : $data = 'CVP C'; break;
            case 32 : $data = 'CVP D'; break;
            case 33 : $data = 'Carbonated Liquor'; break; 
            case 34 : $data = 'Reaction Tank'; break;
            case 35 : $data = 'Clear Liquor'; break;
            case 36 : $data = 'Filter Cake Head'; break;
            case 37 : $data = "Raw Sugar Kedatangan"; break;
            case 38 : $data = 'Magma RS'; break;
            case 39 : $data = "Gula RS"; break; 
            case 40 : $data = 'Klare SHS'; break;
            case 41 : $data = 'Remelter A'; break;
            case 42 : $data = "Raw Sugar Silo"; break;
            case 43 : $data = "Not Registered"; break;
            case 44 : $data = 'Einwuurf C'; break;
            case 45 : $data = 'Einwuurf D'; break;
            case 46 : $data = "Gula SHS"; break;
            case 47 : $data = 'R1 Mol'; break;
            case 48 : $data = 'Masakan R1'; break;
            case 49 : $data = "Sogokan C"; break;
            case 50 : $data = 'Remelter CD'; break;
            case 51 : $data = "Gula R1"; break;
            case 52 : $data = 'R2 Mol'; break;
            case 53 : $data = 'Masakan A Raw'; break;
            case 54 : $data = "Gula A Raw"; break; 
            case 55 : $data = 'Stroop A'; break;
            case 56 : $data = 'Masakan C'; break;
            case 57 : $data = 'Masakan D'; break;
            case 58 : $data = "Sogokan D"; break;
            case 59 : $data = 'Stroop C'; break;
            case 60 : $data = 'Klare D'; break;
            case 61 : $data = 'Tetes'; break;
            case 62 : $data = "Gula C"; break; 
            case 63 : $data = "Gula D1"; break;
            case 64 : $data = "Gula D2"; break;
            case 65 : $data = 'Masakan A'; break;
            case 66 : $data = "Not Registered"; break;
            case 67 : $data = "Not Registered"; break;
            case 68 : $data = 'Remelter In'; break;
            case 69 : $data = 'Pre-Evaporator'; break;
            case 70 : $data = 'Evaporator 1'; break;
            case 71 : $data = 'Evaporator 2'; break;
            case 72 : $data = 'Evaporator 3'; break;
            case 73 : $data = 'Evaporator 4'; break;
            case 74 : $data = 'Evaporator 5'; break;
            case 75 : $data = 'Tetes Tangki 1'; break;
            case 76 : $data = 'Tetes Tandon'; break;
            case 77 : $data = 'Tetes Tangki 3'; break;
            case 78 : $data = 'Filter Cake Mid'; break;
            case 79 : $data = 'Filter Cake End'; break;
            case 80 : $data = "Not Registered"; break;
            case 81 : $data = "Not Registered"; break;
            case 82 : $data = 'Masakan R2'; break;
            case 83 : $data = 'Klare RS'; break;
            case 84 : $data = "Gula R2"; break;
            case 85 : $data = "Not Registered"; break;
            case 86 : $data = "Not Registered"; break;
            case 87 : $data = "Not Registered"; break;
            case 88 : $data = "Not Registered"; break;
            case 89 : $data = 'Blotong RVF 2'; break;
            case 90 : $data = 'Blotong RVF 3'; break;
            case 91 : $data = 'Blotong RVF 4'; break;
            case 92 : $data = 'Tetes Tangki 2'; break;
            case 93 : $data = 'Tetes Kumpulan'; break;
            case 94 : $data = "Not Registered"; break;
            case 95 : $data = "Not Registered"; break;
            case 96 : $data = "Request"; break;
            case 97 : $data = "Not Registered"; break;
            case 98 : $data = 'Blotong Request'; break;
        }
        return $data;
    }


}
