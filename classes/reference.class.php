<?php

require_once 'database.php';

class Reference{

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function get_region(){
        $sql = "SELECT * FROM refregion;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_province($region_code){
        $sql = "SELECT * FROM refprovince WHERE regCode = :regCode ORDER BY provDesc ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':regCode', $region_code);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_City($province_code){
        $sql = "SELECT * FROM refcitymun WHERE provCode = :provCode ORDER BY citymunDesc ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':provCode', $province_code);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_barangay($city_code){
        $sql = "SELECT * FROM refbrgy WHERE citymunCode = :citymunCode ORDER BY brgyDesc ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':citymunCode', $city_code);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_work(){
        $sql = "SELECT * FROM refoccupation ORDER BY occupation ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_education(){
        $sql = "SELECT * FROM refeducation;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_employment(){
        $sql = "SELECT * FROM refemployment;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_strand(){
        $sql = "SELECT * FROM refstrand ORDER BY strand ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_class_org(){
        $sql = "SELECT * FROM refclassorg;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_scg_org(){
        $sql = "SELECT * FROM refscgorg;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>