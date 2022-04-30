<?php

include 'connection.php';

session_start();
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
    
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_password'] = $user_password;

        $info = "INSERT INTO lab07.registered_user (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$user_password');";
        $sent_info = mysqli_query($conn, $info);
        include 'registered.php';
    }else{
        header('Location: index.html');
        exit;
    }

    // echo 'Bienvenido '.$_SESSION['user_name'].'<br>'.' te haz registrado con el correo '
    // .$_SESSION['user_email'].'<br>'.' recuerda que tu contraseña es: '.$_SESSION['user_password'];
?>