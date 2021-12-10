<?php
require_once(__DIR__.'/../settings/connection.php');

class User extends Connection{

    function add_user($name, $emailadd, $number, $pwd){
        return $this->query("INSERT INTO users (`name`, `email`, `telNo`, `password`) VALUES ('$name', '$emailadd', '$number', '$pwd')");
    }

    function select_user($emailadd){
        return $this->fetchOne("SELECT * FROM users WHERE email='$emailadd'");
    }

    function login_user($emailadd, $pwd){
        return $this->fetchOne("SELECT * FROM `users` WHERE email='$emailadd' AND password='$pwd'");
    }

    function login_admin($credential, $loginpwd){
        return $this->fetchOne("SELECT * FROM `admincredentials` WHERE username='$credential' AND password='$loginpwd'");
    }
}
?>