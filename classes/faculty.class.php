<?php

class Faculty{
    //attributes

    public $firstname;
    public $lastname;
    public $email;
    public $academic_rank;
    public $department;
    public $admission_role = 'None';
    public $status = 'Inactive';

    //Methods
    function add_faculty(){
        $faculty = array(
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email" => $this->email,
            "academic_rank" => $this->academic_rank,
            "department" => $this->department,
            "admission_role" => $this->admission_role,
            "status" => $this->status
        );
        if(array_push($_SESSION['faculty'], $faculty)){
            return true;
        }
        return false;
    }

}

?>