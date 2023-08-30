<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <div class="container mt-5">
        <h1>Contactanos</h1>
        <p>Si tienes alguna pregunta o comentario, no dudes en ponerte en contacto con nosotros.</p>

        <div class="row">
            <div class="col-md-6">
                <h2>Información de Contacto</h2>
                <p><strong>Correo Electrónico:</strong> vaquero_shop@gmail.com</p>
                <p><strong>Teléfono:</strong> 844 494 3006</p>
                <p><strong>Dirección:</strong> Av. Principal #123, Ciudad</p>
            </div>
            <div class="col-md-6">
                <h2>Formulario de Contacto</h2>
                <form action="procesar_contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" class="form-control" name="correo" id="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>