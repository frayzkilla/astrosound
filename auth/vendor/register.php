<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql =  "INSERT INTO `users` (`username`, `password`, `phone_number`) VALUES ('$login', '$password', '$phone')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['success'] = "Вы успешно зарегистрированы";
    } else{
        $_SESSION['message'] = "Что-то пошло не так";
    }

    mysqli_close($connect); 

    header('Location: ../auth.php');
    
?>