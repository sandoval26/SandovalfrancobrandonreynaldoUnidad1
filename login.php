<?php
session_start();
require_once 'conn.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate reCAPTCHA
    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = '6LdaODQmAAAAANwgfEpuL2XmO4PjYsI_mvm9kirg';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$ip}");

    $captchaResult = json_decode($response, TRUE);

    if (!$captchaResult['success']) {
        echo "Verifica el captcha";
        echo '<br><a href="login.php">Atras</a>';
        exit;
    }

    // Proceed with login validation
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE correo=:correo AND password=:password');
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':password', $password);
    $sql->execute();
    $count = $sql->rowCount();

    if ($count == 1) {
        $query = $pdo->prepare('SELECT * FROM usuarios WHERE correo=:correo');
        $query->bindParam(':correo', $correo);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $tipo_usuario = $row['tipo_usuario'];
        $id_usuario = $row['id'];
        $correo = $row['correo'];

        $_SESSION['id'] = $id_usuario;
        $_SESSION['tipo_usuario'] = $tipo_usuario;
        $_SESSION['correo'] = $correo;

        if ($tipo_usuario == "admin") {
            header("location: page_admin.php");
        } else if ($tipo_usuario == "usuario") {
            header("location: page_user.php");
        }
        exit;
    } else {
        echo "Usuario incorrecto!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
    <div class="container mt-5">
        <form method="post" class="col-md-6 offset-md-3">
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" class="form-control" name="correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <div class="g-recaptcha" data-sitekey="6LdaODQmAAAAAERG16xF_IbvqQT2tztjuIa4wTlb"></div>
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Iniciar sesión</button>
            <a href="registrar.php" class="ml-3">Registrarse</a>
        </form>
    </div>
    <!-- Agregar el enlace al archivo JavaScript de Bootstrap (opcional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>