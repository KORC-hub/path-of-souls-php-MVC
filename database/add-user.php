<?php

    require_once "connect.php";
    require_once "../config/app.php";

    $nombre = $_POST['userName'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $score = 0;

    $insertar = "INSERT INTO users VALUES ('$nombre','$email','$password','$score')";


    $query = mysqli_query($connect,$insertar);

    header("Location: ".SERVERURL."/");
?>