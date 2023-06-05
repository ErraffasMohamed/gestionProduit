<?php
require_once("../utils/connection.php");

function createUser($user)
{
    $conn = connection();
    $sql = "INSERT INTO `users` ( `username`, `password`, `email`,`telephone`,`address`) 
            VALUE (:username,:password,:email,:telephone,:address) ";
    $conn->prepare($sql)->execute($user);
}
function signIn($credits){
    $conn = connection();
    $sql = 'select * from users where email = :email AND password = :password';
    $sql = $conn->prepare($sql);
    $sql->execute($credits);
    $user = $sql->fetchAll();
    return $user;
    
}