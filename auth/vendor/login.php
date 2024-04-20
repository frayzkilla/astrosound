<?php

    session_start();

    require_once 'connect.php';


    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user)==0){
        $_SESSION['message'] = "Неверный логин или пароль";
        header('Location: ../auth.php');
    } else{
        $_SESSION['user'] = $login;
        header('Location: ../index.php');
    }
?>