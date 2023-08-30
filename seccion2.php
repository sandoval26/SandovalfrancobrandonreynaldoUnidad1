<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisas</title>
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
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            color: #666;
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
            <img src="imagen/camisa1.jpg" alt="Camisa 1">
            <h2>Camisa Casual Azul</h2>
            <p>Camisa de algodón para un look relajado.</p>
            <p>Precio: $29.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="card">
            <img src="imagen/camisa2.jpg" alt="Camisa 2">
            <h2>Camisa a Cuadros Roja</h2>
            <p>Camisa a cuadros para un estilo clásico.</p>
            <p>Precio: $34.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="card">
            <img src="imagen/camisa3.jpg" alt="Camisa 3">
            <h2>Camisa Blanca Formal</h2>
            <p>Camisa blanca ideal para ocasiones formales.</p>
            <p>Precio: $39.99</p>
            <button>Agregar al carrito</button>
        </div>
        <!-- Repite el patrón de tarjetas para los otros productos -->
        <!-- ... -->
    </div>

    <div class="container">
        <div class="card">
            <img src="imagen/camisa4.jpg" alt="Camisa 1">
            <h2>Camisa Casual Azul</h2>
            <p>Camisa de algodón para un look relajado.</p>
            <p>Precio: $29.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="card">
            <img src="imagen/camisa5.jpg" alt="Camisa 2">
            <h2>Camisa a Cuadros Roja</h2>
            <p>Camisa a cuadros para un estilo clásico.</p>
            <p>Precio: $34.99</p>
            <button>Agregar al carrito</button>
        </div>
        <div class="card">
            <img src="imagen/camisa6.jpg" alt="Camisa 3">
            <h2>Camisa Blanca Formal</h2>
            <p>Camisa blanca ideal para ocasiones formales.</p>
            <p>Precio: $39.99</p>
            <button>Agregar al carrito</button>
        </div>

    </div>

</body>

</html>