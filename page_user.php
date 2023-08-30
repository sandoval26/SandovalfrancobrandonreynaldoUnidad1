<?php
session_start();
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_user</title>
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
            transition: background-color 0.3s;
        }

        li.menu-item a:hover {
            background-color: #555;
        }

        /* Estilos adicionales */
        .bienvenida {
            background-color: #000;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .bienvenida h2 {
            font-size: 24px;
            margin: 0;
            margin-bottom: 10px;
        }

        .bienvenida p {
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>

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
    <br><br>
    <div class="bienvenida">
        <h2>Bienvenido a nuestra tienda de ropa vaquera</h2>
        <p>No te quedes sin probar uno de nuestros productos de alta calidad.</p>
    </div>

</body>

</html>