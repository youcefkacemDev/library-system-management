<?php
    include("../classes/login.class.php");
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $login = $_POST['login'];

    $login = new Login();
    if($login->check($userName, $password)){
        $_SESSION['login'] = $login;
        header("location: ../home.php");
    }
    else{
        header("location: ../index.php");
    }