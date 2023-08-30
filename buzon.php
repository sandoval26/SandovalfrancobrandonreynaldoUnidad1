<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón de Mensajes</title>
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
        <h1>Buzón de Mensajes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Correo</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'conn.php';

                try {
                    $stmt = $pdo->prepare("SELECT correo, mensaje FROM buzon");
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['correo']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['mensaje']) . "</td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error al obtener los mensajes: " . $e->getMessage();
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>