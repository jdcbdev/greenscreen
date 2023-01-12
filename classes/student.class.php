<?php

require_once 'database.php';

class Student{

    public $id;
    public $account_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $extension_name;
    public $gender;
    public $birthdate;
    public $is_profile_complete;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function get_student_info($account_id=0){
        $sql = "SELECT * FROM student WHERE account_id = :account_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':account_id', $account_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function is_profile_complete($account_id=0){
        $sql = "SELECT * FROM student WHERE is_profile_complete = 1 AND account_id = :account_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':account_id', $account_id);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

}

?>