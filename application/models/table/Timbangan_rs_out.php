<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timbangan_rs_out extends CI_Model {

    public function defineTable()
    {
        return 'timbangan_rs_out';
    }
    
    public function createData($bruto, $tara, $netto)
    {
        $table = $this->defineTable();
        $data = array(
            'bruto' => $bruto,
            'tara' => $tara,
            'netto' => $netto,
        );
        $this->db->insert($table, $data);
    }

    public function readData()
    {
        $table = $this->defineTable();
        $this->db->from($table);
        $this->db->limit('5000');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function updateData($id, $time, $bruto, $tara, $netto)
    {   
        $table = $this->defineTable();
        $data = array(
            'time' => $time,
            'bruto' => $bruto,
            'tara' => $tara,
            'netto' => $netto,
        );
        $this->db->update($table, $data, array('id' => $id));
    }

    public function deleteData($id)
    {
        $table = $this->defineTable();
        $this->db->delete($table, array('id'=>$id));
    }

    public function totalYesterday($time)
    {
        $data = $this->db->query
            ("SELECT SUM(`netto`) AS `total` FROM `timbangan_rs_out` WHERE `time` BETWEEN 
                DATE_SUB('$time', INTERVAL 1 DAY) AND 
                '$time'
                ")->result();

        foreach($data as $data)
            $total = $data->total;

        return $total;
    }

    public function totalUntilYesterday($time)
    {
        $data = $this->db->query
            ("SELECT SUM(`netto`) AS `total` FROM `timbangan_rs_out` WHERE `time` BETWEEN 
                DATE_SUB('$time', INTERVAL 2 DAY) AND 
                DATE_SUB('$time', INTERVAL 1 DAY)
                ")->result();

        foreach($data as $data)
            $total = $data->total;
            
        return $total;
    }

    public function totalUntilToday($time)
    {
        $data = $this->db->query
            ("SELECT SUM(`netto`) AS `total` FROM `timbangan_rs_out` WHERE `time` < '$time'")->result();

        foreach($data as $data)
            $total = $data->total;
            
        return $total;
    }

    public function totalUntilNow()
    {
        $data = $this->db->query
            ("SELECT SUM(`netto`) AS `total` FROM `timbangan_rs_out`")->result();

        foreach($data as $data)
            $total = $data->total;
            
        return $total;
    }

    public function totalPerHour($time)
    {
        $data = $this->db->query
            ("SELECT SUM(`netto`) AS `total` FROM `timbangan_rs_out` WHERE `time` BETWEEN 
                '$time' AND 
                DATE_ADD('$time', INTERVAL 1 HOUR)
                ")->result();

        foreach($data as $data)
            $total = $data->total;

        return $total;
    }

}
