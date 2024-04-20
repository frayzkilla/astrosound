<?php
    session_start();
    require_once 'connect.php';

    if($_SESSION['user']){
        $username = strtoupper($_SESSION['user']);
    } else {
        $username = 'GUEST';
    }
    $content = $_POST['content'];


    if(strlen($content) > 7){
        $sql =  "INSERT INTO `reviews` (`userName`, `content`) VALUES ('$username', '$content')";

        if(mysqli_query($connect, $sql)){
            $_SESSION['success_review'] = "Вы успешно оставили отзыв";
        } else{
            $_SESSION['message'] = "Что-то пошло не так";
        }
    } else {
        $_SESSION['message'] = "Слишком короткий отзыв";
    }
    mysqli_close($connect); 

    header('Location: ../reviews.php');
    
?>