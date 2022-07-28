<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Model {

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

    public function getAnalisaGulaLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `coloromat`.*, 
            `moisture`.`kadar_air`,
            `saccharomat`.`hk`,
            `analisa_so2`.`so2`,
            `analisa_bjb`.`bjb`
            from `coloromat` 
            LEFT OUTER JOIN `moisture` ON `coloromat`.`bahan` = `moisture`.`bahan` 
            LEFT OUTER JOIN `saccharomat` ON `coloromat`.`bahan` = `saccharomat`.`bahan` 
            LEFT OUTER JOIN `analisa_so2` ON `coloromat`.`bahan` = `analisa_so2`.`bahan` 
            LEFT OUTER JOIN `analisa_bjb` ON `coloromat`.`bahan` = `analisa_bjb`.`bahan` 
            where `coloromat`.`bahan` between $min_id and $max_id order by `coloromat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaTetesLatest5($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `analisa_tsai`.`tsai`
            from `saccharomat` 
            LEFT OUTER JOIN `analisa_tsai` ON `analisa_tsai`.`bahan` = `analisa_tsai`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc limit 0,5")->result();
    }

    public function getAnalisaKetelJJLatest5()
    {
        return $this->db->query("select `waktu`, `sadah_jj`, `tds_jj`, `ph_jj`, `phospat_jj` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelY1Latest5()
    {
        return $this->db->query("select `waktu`, `sadah_y1`, `tds_y1`, `ph_y1`, `phospat_y1` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelY2Latest5()
    {
        return $this->db->query("select `waktu`, `sadah_y2`, `tds_y2`, `ph_y2`, `phospat_y2` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelDJJLatest5()
    {
        return $this->db->query("select `waktu`, `tds_djj`, `ph_djj` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelDYLatest5()
    {
        return $this->db->query("select `waktu`, `tds_dy`, `ph_dy` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelWTPLatest5()
    {
        return $this->db->query("select `waktu`, `tds_wtp`, `ph_wtp` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }

    public function getAnalisaKetelHWLatest5()
    {
        return $this->db->query("select `waktu`, `tds_hw`, `ph_hw` from `analisa_ketel` order by `id_analisa` desc limit 0,5")->result();
    }
    public function getAnalisaKetelJJAll()
    {
        return $this->db->query("select `waktu`, `sadah_jj`, `tds_jj`, `ph_jj`, `phospat_jj` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelY1All()
    {
        return $this->db->query("select `waktu`, `sadah_y1`, `tds_y1`, `ph_y1`, `phospat_y1` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelY2All()
    {
        return $this->db->query("select `waktu`, `sadah_y2`, `tds_y2`, `ph_y2`, `phospat_y2` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelDJJAll()
    {
        return $this->db->query("select `waktu`, `tds_djj`, `ph_djj` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelDYAll()
    {
        return $this->db->query("select `waktu`, `tds_dy`, `ph_dy` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelWTPAll()
    {
        return $this->db->query("select `waktu`, `tds_wtp`, `ph_wtp` from `analisa_ketel` order by `id_analisa` desc")->result();
    }

    public function getAnalisaKetelHWAll()
    {
        return $this->db->query("select `waktu`, `tds_hw`, `ph_hw` from `analisa_ketel` order by `id_analisa` desc")->result();
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

    public function getAnalisaGulaAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `coloromat`.*, 
            `moisture`.`kadar_air`,
            `saccharomat`.`hk`,
            `analisa_so2`.`so2`,
            `analisa_bjb`.`bjb`
            from `coloromat` 
            LEFT OUTER JOIN `moisture` ON `coloromat`.`bahan` = `moisture`.`bahan` 
            LEFT OUTER JOIN `saccharomat` ON `coloromat`.`bahan` = `saccharomat`.`bahan` 
            LEFT OUTER JOIN `analisa_so2` ON `coloromat`.`bahan` = `analisa_so2`.`bahan` 
            LEFT OUTER JOIN `analisa_bjb` ON `coloromat`.`bahan` = `analisa_bjb`.`bahan` 
            where `coloromat`.`bahan` between $min_id and $max_id order by `coloromat`.`id` desc")->result();
    }

    public function getAnalisaTetesAll($id)
    {
        $max_id = ($id + 1) * 10000;
        $min_id = $id * 10000;

        return $this->db->query("select 
            `saccharomat`.*, 
            `analisa_tsai`.`tsai`
            from `saccharomat` 
            LEFT OUTER JOIN `analisa_tsai` ON `analisa_tsai`.`bahan` = `analisa_tsai`.`bahan` 
            where `saccharomat`.`bahan` between $min_id and $max_id order by `saccharomat`.`id` desc")->result();
    }

    public function getAnalisaRequestAll()
    {
        $max_id = 97 * 10000;
        $min_id = 96 * 10000;

        return $this->db->query("select 
            `sampel_request`.*,
            `coloromat`.`IU`, 
            `moisture`.`kadar_air`,
            `saccharomat`.`brix`,
            `saccharomat`.`pol`,
            `saccharomat`.`hk`,
            `saccharomat`.`Z`
            from `sampel_request` 
            LEFT OUTER JOIN `coloromat` ON `sampel_request`.`bahan` = `coloromat`.`bahan` 
            LEFT OUTER JOIN `moisture` ON `sampel_request`.`bahan` = `moisture`.`bahan` 
            LEFT OUTER JOIN `saccharomat` ON `sampel_request`.`bahan` = `saccharomat`.`bahan` 
            where `sampel_request`.`bahan` between $min_id and $max_id order by `sampel_request`.`id` desc")->result();
    }

    /****************************************************************************** */


}
