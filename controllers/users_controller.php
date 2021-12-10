<?php

require_once(__DIR__."/../classes/users_class.php");

function add_user($name, $emailadd, $number, $pwd){
    $user_instance = new User();
    return $user_instance->add_user($name, $emailadd, $number, $pwd);
}

function select_user($emailadd){
    $user_instance = new User();
    return $user_instance->select_user($emailadd);
}

function login_user($emailadd, $pwd){
    $user_instance = new User();
    return $user_instance->login_user($emailadd, $pwd);
}

function login_admin($credential, $loginpwd){
    $user_instance = new User();
    return $user_instance->login_admin($credential, $loginpwd);
}


?>