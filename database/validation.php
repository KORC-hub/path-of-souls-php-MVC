<?php 

    require_once "connect.php";
    require_once "../config/app.php";

    $user = $_POST['nickname'];
    $password = $_POST['password'];

    session_start();
    $_SESSION['user'] = $user;

    $query = "SELECT*FROM users WHERE user_nickname = '$user' and user_clave = '$password'";
    $result = mysqli_query($connect,$query);

    $row = mysqli_num_rows($result);

    if ($row) {
        header("Location: ".SERVERURL."home");
    } else {
        header("Location: ".SERVERURL."/");
    }
    mysqli_free_result($result);
    mysqli_close($connect);



?>