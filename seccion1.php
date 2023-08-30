<?php
session_start();
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa Vaquera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            display: inline-block;
            width: 300px;
            vertical-align: top;
        }

        .card img {
            max-width: 100%;
            height: 500px;
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            color: #666;
        }


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

        .card button {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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

    <div class="container">
        <div class="card">
            <img src="imagen/pantalon1.jpg" alt="Jeans 1">
            <h2>Pantalones Vaqueros Ajustados</h2>
            <p>Pantalones vaqueros ajustados de alta calidad para un look moderno.</p>
            <p>Precio: $49.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon2.jpg" alt="Jeans 2">
            <h2>Pantalones Vaqueros Desgastados</h2>
            <p>Pantalones vaqueros con efecto desgastado para un estilo casual.</p>
            <p>Precio: $39.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon3.jpg" alt="Jeans 3">
            <h2>Pantalones Vaqueros Rectos</h2>
            <p>Pantalones vaqueros rectos clásicos para un look atemporal.</p>
            <p>Precio: $54.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon4.jpg" alt="Jeans 1">
            <h2>Pantalones Vaqueros Ajustados</h2>
            <p>Pantalones vaqueros ajustados de alta calidad para un look moderno.</p>
            <p>Precio: $49.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon5.jpg" alt="Jeans 2">
            <h2>Pantalones Vaqueros Desgastados</h2>
            <p>Pantalones vaqueros con efecto desgastado para un estilo casual.</p>
            <p>Precio: $39.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon6.jpg" alt="Jeans 3">
            <h2>Pantalones Vaqueros Rectos</h2>
            <p>Pantalones vaqueros rectos clásicos para un look atemporal.</p>
            <p>Precio: $54.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon7.jpg" alt="Jeans 1">
            <h2>Pantalones Vaqueros Ajustados</h2>
            <p>Pantalones vaqueros ajustados de alta calidad para un look moderno.</p>
            <p>Precio: $49.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon8.jpg" alt="Jeans 2">
            <h2>Pantalones Vaqueros Desgastados</h2>
            <p>Pantalones vaqueros con efecto desgastado para un estilo casual.</p>
            <p>Precio: $39.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
        <div class="card">
            <img src="imagen/pantalon9.jpg" alt="Jeans 3">
            <h2>Pantalones Vaqueros Rectos</h2>
            <p>Pantalones vaqueros rectos clásicos para un look atemporal.</p>
            <p>Precio: $54.99</p>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['id'])) {
                echo '<button>Agregar al carrito</button>';
            } else {
                echo '<button disabled>inicia session para comprar</button>';
            }
            ?>
        </div>
    </div>
</body>

</html>