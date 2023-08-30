<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuarios</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <form method="post" class="col-md-6 offset-md-3">
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" name="correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Registrarse</button>
            <a href="login.php" class="ml-3">Iniciar sesión</a>
        </form>
    </div>

    <!-- Agregar el enlace al archivo JavaScript de Bootstrap (opcional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
require_once 'conn.php';
// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $tipo_usuario = "usuario";

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (correo, password, tipo_usuario) VALUES (?, ?, ?)");
        $stmt->execute([$correo, $password, $tipo_usuario]);

        echo "Usuario registrado exitosamente.";
        header("Location:login.php");
    } catch (PDOException $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>