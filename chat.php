<!DOCTYPE html>
<html>

<head>
    <title>Chatbot PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #chat-container {
            max-width: 700px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            height: 400px;
            /* Altura inicial */
            overflow-y: auto;
        }

        .mensaje-usuario {
            background-color: #DCF8C6;
            border-radius: 10px;
            padding: 5px 10px;
            margin-bottom: 10px;
            max-width: 70%;
            float: right;
            clear: both;
        }

        .mensaje-bot {
            background-color: #E5E5EA;
            border-radius: 10px;
            padding: 5px 10px;
            margin-bottom: 10px;
            max-width: 70%;
            float: left;
            clear: both;
        }

        #mensaje {
            width: 70%;
            padding: 5px;
        }

        #enviar {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
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
    <h1 style="text-align: center;">Chatbot PHP</h1>
    <div id="chat-container">
        <div id="chat-log">
            <!-- Aquí se mostrarán los mensajes -->
        </div>
        <input type="text" id="mensaje" placeholder="Escribe un mensaje...">
        <button id="enviar">Enviar</button>
    </div>

    <script>
        const chatLog = document.getElementById("chat-log");
        const mensajeInput = document.getElementById("mensaje");
        const enviarBtn = document.getElementById("enviar");

        enviarBtn.addEventListener("click", () => {
            const mensaje = mensajeInput.value;
            mostrarMensajeUsuario(mensaje);
            obtenerRespuestaDelBot(mensaje);
        });

        function mostrarMensajeUsuario(mensaje) {
            chatLog.innerHTML += `<div class="mensaje-usuario">${mensaje}</div>`;
            mensajeInput.value = "";
            actualizarScroll();
        }

        function mostrarRespuestaBot(respuesta) {
            chatLog.innerHTML += `<br><br><br><br><br><br><div class="mensaje-bot">${respuesta}</div>`;
            actualizarScroll();
        }

        function obtenerRespuestaDelBot(mensaje) {
            fetch('get_response.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `mensaje=${encodeURIComponent(mensaje)}`,
            })
                .then(response => response.text())
                .then(respuesta => mostrarRespuestaBot(respuesta))
                .catch(error => console.error('Error:', error));
        }

        function actualizarScroll() {
            chatLog.scrollTop = chatLog.scrollHeight;
        }
    </script>
</body>

</html>