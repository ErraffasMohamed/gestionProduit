<?php
require_once('../dao/user.dao.php');
session_start();

login();

function login(){
    $credits=[
    "email"=>$_POST['email'],
    "password"=>$_POST['password']];

    $user = signIn($credits);
    $_SESSION['user'] = $user;

    if(isset($user) && $user != null)
    {
    header("location:../presentation/home.php");
    }
    else
    header("location:../presentation/login.html");


}