<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registered</title>
</head>
<body class="body-php">

    <div class="welcome">
        <h1 class="h1-php">
            <?php
            echo 'Bienvenido '.$_SESSION['user_name'].'<br>'.' Te haz registrado con el correo: '
            .$_SESSION['user_email'].'<br>'.' Recuerda que tu contraseña es: '.$_SESSION['user_password'];            
            ?>
        </h1>
    </div>

</body>
</html>