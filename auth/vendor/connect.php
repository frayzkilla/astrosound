<?php

    session_start();

    $connect = mysqli_connect('localhost', 'root', '', 'auth_form_db');

    if(!$connect){
        die('no connection to database');
    }

