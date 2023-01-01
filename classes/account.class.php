<?php

require_once 'database.php';

class Account{

    public $id;
    public $username;
    public $password;
    public $type;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function sign_in(){
        $sql = "SELECT * FROM account WHERE BINARY username = :username AND BINARY password = :password;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function get_account_info(){
        $sql = "SELECT * FROM account WHERE BINARY username = :username AND BINARY password = :password;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>