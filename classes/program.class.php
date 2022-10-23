<?php

Class Program{
    //attributes

    public $code;
    public $description;
    public $years;
    public $level;
    public $cet;
    public $status;

    //Methods
    function add_program(){
        $program = array(
            "program_code" => $this->code,
            "description" => $this->description,
            "years_to_complete" => $this->years,
            "level" => $this->level,
            "cet_requirement" => $this->cet,
            "status" => $this->status
        );
        if(array_push($_SESSION['programs'], $program)){
            return true;
        }
        return false;
    }
}

?>