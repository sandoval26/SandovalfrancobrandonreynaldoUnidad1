<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ayuda</title>
</head>
<style>
    /* Estilos CSS para el menú */
    ul.menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #333;
        overflow: hidden;
    }

    li.menu-item {
        float: left;
    }

    li.menu-item a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li.menu-item a:hover {
        background-color: #555;
    }
</style>

<body>

    <ul class="menu">
        <li class="menu-item"><a href="page_user.php">Inicio</a></li>
        <li class="menu-item"><a href="seccion1.php">Pantalones</a></li>
        <li class="menu-item"><a href="seccion2.php">Camisas</a></li>
        <li class="menu-item"><a href="registrar.php">Registrar</a></li>
        <li class="menu-item"><a href="buzon.php">Buzón</a></li>
        <li class="menu-item"><a href="login.php">Inicio de Sesión</a></li>
        <li class="menu-item"><a href="ayuda.php">Ayuda</a></li>
        <li class="menu-item"><a href="contacto.php">Contáctanos</a></li>
        <li class="menu-item"><a href="chat.php">Chat</a></li>
    </ul>
    <h1>Contacto de Ayuda</h1>
    <form method="POST">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" value="<?php echo $_SESSION['correo']; ?>" name="correo" id="correo" required><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" rows="4" cols="50" required></textarea><br><br>

        <button name="enviar">Enviar mensaje</button>
    </form>
</body>

</html>

<?php
require_once 'conn.php';

if (isset($_POST['enviar'])) {
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    try {
        $stmt = $pdo->prepare("INSERT INTO buzon (correo, mensaje) VALUES (?, ?)");
        $stmt->execute([$correo, $mensaje]);

        echo "Mensaje enviado exitosamente.";
    } catch (PDOException $e) {
        echo "Error al enviar el mensaje: " . $e->getMessage();
    }
}
?>