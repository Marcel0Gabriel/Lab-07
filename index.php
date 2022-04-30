<?php

    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    session_start();
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['user_password'] = $user_password;

    // echo 'Bienvenido '.$_SESSION['user_name'].'<br>'.' te haz registrado con el correo '
    // .$_SESSION['user_email'].'<br>'.' recuerda que tu contraseña es: '.$_SESSION['user_password'];
    include 'registered.php';
?>