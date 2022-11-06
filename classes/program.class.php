<?php

require_once 'database.php';

Class Program{
    //attributes

    public $code;
    public $description;
    public $years;
    public $level;
    public $cet;
    public $status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO programs (code, description, years, level, cet, status) VALUES 
        (:code, :description, :years, :level, :cet, :status)";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':code', $this->code);
        $query->bindParam(':years', $this->years);
        $query->bindParam(':level', $this->level);
        $query->bindParam(':cet', $this->cet);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show(){
        $sql = "SELECT * FROM programs ORDER BY code ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}

?>