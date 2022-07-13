<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa_Model extends CI_Model {

    protected $start_giling = "2022-05-20 05:00";

    public function getAnalisaNppLatest5()
    {
        return $this->db->query("select * from `analisa_npp` order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaBrixPolLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `saccharomat` where `bahan` between $min_id and $max_id order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaAmpasLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `analisa_ampas` where `bahan` between $min_id and $max_id order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaPemurnianLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `coloromat`.`IU`,
            `analisa_umum`.`cao`,
            `analisa_umum`.`ph`,
            `analisa_umum`.`tur`
            from `saccharomat` 
            LEFT OUTER JOIN `coloromat` ON `saccharomat`.`bahan` = `coloromat`.`bahan` 
            LEFT OUTER JOIN `analisa_umum` ON `saccharomat`.`bahan` = `analisa_umum`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaBlotongLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `analisa_ampas`.`kadar_air`
            from `saccharomat` 
            LEFT OUTER JOIN `analisa_ampas` ON `saccharomat`.`bahan` = `analisa_ampas`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaCakeLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `moisture`.`kadar_air`
            from `saccharomat` 
            LEFT OUTER JOIN `moisture` ON `saccharomat`.`bahan` = `moisture`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaIcumsaLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `coloromat` where `bahan` between $min_id and $max_id order by `id` desc limit 0,5")->result();
    }

    public function getAnalisaStroopLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `coloromat`.`IU`
            from `saccharomat` 
            LEFT OUTER JOIN `coloromat` ON `saccharomat`.`bahan` = `coloromat`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaKetelLatest5()
    {
        return $this->db->query("select * from `analisa_ketel` order by `id_analisa` desc limit 0,100")->result();
    }

    public function getAnalisaNppAll()
    {
        return $this->db->query("select * from `analisa_npp` order by `id` desc")->result();
    }

    public function getAnalisaBrixPolAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `saccharomat` where `bahan` between $min_id and $max_id order by `id` desc")->result();
    }

    public function getAnalisaAmpasAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select * from `analisa_ampas` where `bahan` between $min_id and $max_id order by `id` desc")->result();
    }

    public function getAnalisaPemurnianAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `coloromat`.`IU`,
            `analisa_umum`.`cao`,
            `analisa_umum`.`ph`,
            `analisa_umum`.`tur`
            from `saccharomat` 
            LEFT OUTER JOIN `coloromat` ON `saccharomat`.`bahan` = `coloromat`.`bahan` 
            LEFT OUTER JOIN `analisa_umum` ON `saccharomat`.`bahan` = `analisa_umum`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc")->result();
    }

    public function getAnalisaBlotongAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `analisa_ampas`.`zk`,
            `analisa_ampas`.`kadar_air`
            from `saccharomat` 
            LEFT OUTER JOIN `analisa_ampas` ON `saccharomat`.`bahan` = `analisa_ampas`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc")->result();
    }

    public function getAnalisaCakeAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `moisture`.`kadar_air`
            from `saccharomat` 
            LEFT OUTER JOIN `moisture` ON `saccharomat`.`bahan` = `moisture`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc")->result();
    }

    public function getAnalisaStroopAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `coloromat`.`IU`
            from `saccharomat` 
            LEFT OUTER JOIN `coloromat` ON `saccharomat`.`bahan` = `coloromat`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc")->result();
    }

    /****************************************************************************** */

    public function editAnalisaNPP($id, $brix, $pol, $rendemen)
    {
        $this->db->query("update `analisa_npp` set `brix` = '$brix', `pol` = '$pol', `rendemen` = '$rendemen' where `id` = '$id'");
    }

    public function editSaccharomat($id, $brix, $pol, $hk, $bahan)
    {
        $this->db->query("update `saccharomat` set 
            `brix`  = '$brix', 
            `pol`   = '$pol', 
            `hk`    = '$hk',
            `bahan` = '$bahan'
        where `id` = '$id'");
    }

    public function editAnalisaAmpas($id, $pol_koreksi, $zk, $kadar_air, $bahan)
    {
        $this->db->query("update `analisa_ampas` set 
            `pol_koreksi`   = '$pol_koreksi', 
            `zk`            = '$zk', 
            `kadar_air`     = '$kadar_air',
            `bahan`         = '$bahan'
        where `id` = '$id'");
    }

    public function editColoromat($iu, $bahan)
    {
        $this->db->query("update `coloromat` set `IU` = '$iu'
        where `bahan` = '$bahan'");
    }

    public function editAnalisaUmum($cao, $ph, $tur, $bahan)
    {
        $this->db->query("update `analisa_umum` set 
            `cao`   = '$cao', 
            `ph`    = '$ph', 
            `tur`   = '$tur'
        where `bahan` = '$bahan'");
    }

    public function editAnalisaBlotong($id, $z, $bahan)
    {
        $this->db->query("update `saccharomat` set 
            `Z`     = '$z', 
            `bahan` = '$bahan'
        where `id` = '$id'");
    }

    public function editKadarAirBlotong($kadar_air, $bahan)
    {
        $this->db->query("update `analisa_ampas` set `kadar_air` = '$kadar_air' where `bahan` = '$bahan'");
    }

    public function editMoistureCake($kadar_air, $bahan)
    {
        $this->db->query("update `moisture` set `kadar_air` = '$kadar_air' where `bahan` = '$bahan'");
    }

    public function editPenguapan($id, $brix, $bahan)
    {
        $this->db->query("update `saccharomat` set 
            `brix`     = '$brix', 
            `bahan` = '$bahan'
        where `id` = '$id'");
    }

    /******************************************************************* */

    public function deleteAnalisaNPP($id)
    {
        $this->db->query("delete from `analisa_npp` where `id` = $id");
    }

    public function deleteSaccharomat($id)
    {
        $this->db->query("delete from `saccharomat` where `id` = $id");
    }

    public function deleteAnalisaAmpas($id)
    {
        $this->db->query("delete from `analisa_ampas` where `id` = $id");
    }

    /***************************************************************** */

    public function hitungRendemenNPP($brix, $pol)
    {
        switch($brix)
        {
            case $brix >= 9.0 &&  $brix < 9.1 :$bj = 1.03199;break;
            case $brix >= 9.1 &&  $brix < 9.2 :$bj = 1.03240;break;
            case $brix >= 9.2 &&  $brix < 9.3 :$bj = 1.03281;break;
            case $brix >= 9.3 &&  $brix < 9.4 :$bj = 1.03322;break;
            case $brix >= 9.4 &&  $brix < 9.5 :$bj = 1.03362;break;
            case $brix >= 9.5 &&  $brix < 9.6 :$bj = 1.03403;break;
            case $brix >= 9.6 &&  $brix < 9.7 :$bj = 1.03444;break;
            case $brix >= 9.7 &&  $brix < 9.8 :$bj = 1.03485;break;
            case $brix >= 9.8 &&  $brix < 9.9 :$bj = 1.03256;break;
            case $brix >= 9.9 &&  $brix < 10.0 :$bj = 1.03567;break;
            case $brix >= 10.0 && $brix < 10.1 :$bj = 1.03608;break;
            case $brix >= 10.1 && $brix < 10.2 :$bj = 1.03649;break;
            case $brix >= 10.2 && $brix < 10.3 :$bj = 1.03690;break;
            case $brix >= 10.3 && $brix < 10.4 :$bj = 1.03731;break;
            case $brix >= 10.4 && $brix < 10.5 :$bj = 1.03772;break;
            case $brix >= 10.5 && $brix < 10.6 :$bj = 1.03813;break;
            case $brix >= 10.6 && $brix < 10.7 :$bj = 1.03854;break;
            case $brix >= 10.7 && $brix < 10.8 :$bj = 1.03896;break;
            case $brix >= 10.8 && $brix < 10.9 :$bj = 1.03937;break;
            case $brix >= 10.9 && $brix < 11.0 :$bj = 1.03978;break;
            case $brix >= 11.0 && $brix < 11.1 :$bj = 1.04019;break;
            case $brix >= 11.1 && $brix < 11.2 :$bj = 1.04061;break;
            case $brix >= 11.2 && $brix < 11.3 :$bj = 1.04102;break;
            case $brix >= 11.3 && $brix < 11.4 :$bj = 1.04143;break;
            case $brix >= 11.4 && $brix < 11.5 :$bj = 1.04185;break;
            case $brix >= 11.5 && $brix < 11.6 :$bj = 1.04226;break;
            case $brix >= 11.6 && $brix < 11.7 :$bj = 1.04267;break;
            case $brix >= 11.7 && $brix < 11.8 :$bj = 1.04309;break;
            case $brix >= 11.8 && $brix < 11.9 :$bj = 1.04350;break;
            case $brix >= 11.9 && $brix < 12.0 :$bj = 1.04392;break;
            case $brix >= 12.0 && $brix < 12.1 :$bj = 1.04433;break;
            case $brix >= 12.1 && $brix < 12.2 :$bj = 1.04475;break;
            case $brix >= 12.2 && $brix < 12.3 :$bj = 1.04517;break;
            case $brix >= 12.3 && $brix < 12.4 :$bj = 1.04558;break;
            case $brix >= 12.4 && $brix < 12.5 :$bj = 1.04600;break;
            case $brix >= 12.5 && $brix < 12.6 :$bj = 1.04642;break;
            case $brix >= 12.6 && $brix < 12.7 :$bj = 1.04683;break;
            case $brix >= 12.7 && $brix < 12.8 :$bj = 1.04725;break;
            case $brix >= 12.8 && $brix < 12.9 :$bj = 1.04767;break;
            case $brix >= 12.9 && $brix < 13.0 :$bj = 1.04809;break;
            case $brix >= 13.0 && $brix < 13.1 :$bj = 1.04851;break;
            case $brix >= 13.1 && $brix < 13.2 :$bj = 1.04892;break;
            case $brix >= 13.2 && $brix < 13.3 :$bj = 1.04934;break;
            case $brix >= 13.3 && $brix < 13.4 :$bj = 1.04976;break;
            case $brix >= 13.4 && $brix < 13.5 :$bj = 1.05018;break;
            case $brix >= 13.5 && $brix < 13.6 :$bj = 1.05060;break;
            case $brix >= 13.6 && $brix < 13.7 :$bj = 1.05102;break;
            case $brix >= 13.7 && $brix < 13.8 :$bj = 1.05144;break;
            case $brix >= 13.8 && $brix < 13.9 :$bj = 1.05186;break;
            case $brix >= 13.9 && $brix < 14.0 :$bj = 1.05228;break;
            case $brix >= 14.0 && $brix < 14.1 :$bj = 1.05271;break;
            case $brix >= 14.1 && $brix < 14.2 :$bj = 1.05531;break;
            case $brix >= 14.2 && $brix < 14.3 :$bj = 1.05355;break;
            case $brix >= 14.3 && $brix < 14.4 :$bj = 1.05397;break;
            case $brix >= 14.4 && $brix < 14.5 :$bj = 1.05439;break;
            case $brix >= 14.5 && $brix < 14.6 :$bj = 1.05482;break;
            case $brix >= 14.6 && $brix < 14.7 :$bj = 1.05524;break;
            case $brix >= 14.7 && $brix < 14.8 :$bj = 1.05566;break;
            case $brix >= 14.8 && $brix < 14.9 :$bj = 1.05609;break;
            case $brix >= 14.9 && $brix < 15.0 :$bj = 1.05651;break;
            case $brix >= 15.0 && $brix < 15.1 :$bj = 1.05694;break;
            case $brix >= 15.1 && $brix < 15.2: $bj = 1.05736;break;
            case $brix >= 15.2 && $brix < 15.3 :$bj = 1.05779;break;
            case $brix >= 15.3 && $brix < 15.4 :$bj = 1.05821;break;
            case $brix >= 15.4 && $brix < 15.5 :$bj = 1.05864;break;
            case $brix >= 15.5 && $brix < 15.6 :$bj = 1.05906;break;
            case $brix >= 15.6 && $brix < 15.7 :$bj = 1.05595;break;
            case $brix >= 15.7 && $brix < 15.8 :$bj = 1.05991;break;
            case $brix >= 15.8 && $brix < 15.9 :$bj = 1.06034;break;
            case $brix >= 15.9 && $brix < 16.0 :$bj = 1.06077;break;
            case $brix >= 16.0 && $brix < 16.1 :$bj = 1.06120;break;
            case $brix >= 16.1 && $brix < 16.2 :$bj = 1.06162;break;
            case $brix >= 16.2 && $brix < 16.3 :$bj = 1.06205;break;
            case $brix >= 16.3 && $brix < 16.4 :$bj = 1.06248;break;
            case $brix >= 16.4 && $brix < 16.5 :$bj = 1.06291;break;
            case $brix >= 16.5 && $brix < 16.6 :$bj = 1.06334;break;
            case $brix >= 16.6 && $brix < 16.7 :$bj = 1.06378;break;
            case $brix >= 16.7 && $brix < 16.8 :$bj = 1.06420;break;
            case $brix >= 16.8 && $brix < 16.9 :$bj = 1.06463;break;
            case $brix >= 16.9 && $brix < 17.0 :$bj = 1.06506;break;
            case $brix >= 17.0 && $brix < 17.1 :$bj = 1.06549;break;
            case $brix >= 17.1 && $brix < 17.2 :$bj = 1.06592;break;
            case $brix >= 17.2 && $brix < 17.3 :$bj = 1.06635;break;
            case $brix >= 17.3 && $brix < 17.4 :$bj = 1.06678;break;
            case $brix >= 17.4 && $brix < 17.5 :$bj = 1.06721;break;
            case $brix >= 17.5 && $brix < 17.6 :$bj = 1.06764;break;
            case $brix >= 17.6 && $brix < 17.7 :$bj = 1.06808;break;
            case $brix >= 17.7 && $brix < 17.8 :$bj = 1.06851;break;
            case $brix >= 17.8 && $brix < 17.9 :$bj = 1.06894;break;
            case $brix >= 17.9 && $brix < 18.0 :$bj = 1.06938;break;
            case $brix >= 18.0 && $brix < 18.1 :$bj = 1.06981;break;
            case $brix >= 18.1 && $brix < 18.2 :$bj = 1.07024;break;
            case $brix >= 18.2 && $brix < 18.3 :$bj = 1.07068;break;
            case $brix >= 18.3 && $brix < 18.4 :$bj = 1.07111;break;
            case $brix >= 18.4 && $brix < 18.5 :$bj = 1.07155;break;
            case $brix >= 18.5 && $brix < 18.6 :$bj = 1.07198;break;
            case $brix >= 18.6 && $brix < 18.7 :$bj = 1.07242;break;
            case $brix >= 18.7 && $brix < 18.8 :$bj = 1.07285;break;
            case $brix >= 18.8 && $brix < 18.9 :$bj = 1.07329;break;
            case $brix >= 18.9 && $brix < 19.0 :$bj = 1.07373;break;
            case $brix >= 19.0 && $brix < 19.1 :$bj = 1.07417;break;
            case $brix >= 19.1 && $brix < 19.2 :$bj = 1.07460;break;
            case $brix >= 19.2 && $brix < 19.3 :$bj = 1.07504;break;
            case $brix >= 19.3 && $brix < 19.4 :$bj = 1.07548;break;
            case $brix >= 19.4 && $brix < 19.5 :$bj = 1.07592;break;
            case $brix >= 19.5 && $brix < 19.6 :$bj = 1.07635;break;
            case $brix >= 19.6 && $brix < 19.7 :$bj = 1.07679;break;
            case $brix >= 19.7 && $brix < 19.8 :$bj = 1.07723;break;
            case $brix >= 19.8 && $brix < 19.9 :$bj = 1.07767;break;
            case $brix >= 19.9 && $brix < 20.0 :$bj = 1.07811;break;
            case $brix >= 20.0 && $brix < 20.1 :$bj = 1.07855;break;
            case $brix >= 20.1 && $brix < 20.2 :$bj = 1.07899;break;
            case $brix >= 20.2 && $brix < 20.3 :$bj = 1.07943;break;
            case $brix >= 20.3 && $brix < 20.4 :$bj = 1.07987;break;
            case $brix >= 20.4 && $brix < 20.5 :$bj = 1.08032;break;
            case $brix >= 20.5 && $brix < 20.6 :$bj = 1.08076;break;
        }
        return $rendemen = number_format(0.7 * ($pol - 0.5 * ($brix - $pol)),2);
    }

    public function hitungHKNonGula($brix, $pol)
    {
        return $hk = number_format(($pol/$brix * 100),2);
    }

}
