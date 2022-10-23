<?php

function validate_first_name($POST){
    if(!isset($POST['fn'])){
        return false;
    }else if(strlen(trim($POST['fn']))<1){
        return false;
    }
    return true;
}

function validate_last_name($POST){
    if(!isset($POST['ln'])){
        return false;
    }else if(strlen(trim($POST['ln']))<1){
        return false;
    }
    return true;
}

function validate_email($POST){
    // Remove all illegal characters from email
    $email = filter_var($POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Separate string by @ characters (there should be only one)
        $parts = explode('@', $email);

        // Remove and return the last part, which should be the domain
        $domain = array_pop($parts);

        // Check if the domain is WMSU
        if (strcmp(strtolower($domain), 'wmsu.edu.ph') != 0)
        {
            return false;
        }
    } else {
        return false;
    }
    return true;
}

function validate_rank($POST){
    if(!isset($POST['rank'])){
        return false;
    }else if(strcmp($POST['rank'], 'None') == 0){
        return false;
    }
    return true;
}

function validate_department($POST){
    if(!isset($POST['department'])){
        return false;
    }else if(strcmp($POST['department'], 'None') == 0){
        return false;
    }
    return true;
}

function validate_all($POST){
    if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_email($POST) ||
     !validate_rank($POST) || !validate_department($POST)){
        return false;
     }
    return true;
}

?>