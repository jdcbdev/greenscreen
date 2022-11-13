<?php

require_once 'database.php';

class Faculty{
    //attributes

    public $firstname;
    public $lastname;
    public $email;
    public $academic_rank;
    public $department;
    public $admission_role = 'None';
    public $status = 'Inactive';

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods
    function add(){
        $sql = "INSERT INTO faculty (firstname, lastname, email, academic_rank, department, admission_role, status) VALUES 
        (:firstname, :lastname, :email, :academic_rank, :department, :admission_role, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':academic_rank', $this->academic_rank);
        $query->bindParam(':department', $this->department);
        $query->bindParam(':admission_role', $this->admission_role);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show(){
        $sql = "SELECT * FROM faculty ORDER BY CONCAT('lastname',', ','firstname') ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>