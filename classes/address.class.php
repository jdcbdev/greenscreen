<?php

require_once 'database.php';

class Address{

    public $region_code;
    public $province_code;
    public $city_code;
    public $barangay_code;

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

    function get_province(){
        $sql = "SELECT * FROM refprovince WHERE regCode = :regCode;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':regCode', $this->region_code);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_City(){
        $sql = "SELECT * FROM refcitymun WHERE provCode = :provCode;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':provCode', $this->province_code);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_barangay(){
        $sql = "SELECT * FROM refbrgy WHERE citymunCode = :citymunCode;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':citymunCode', $this->city_code);
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

}

?>