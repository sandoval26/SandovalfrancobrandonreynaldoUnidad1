<?php
include 'chatbot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = $_POST['mensaje'];
    $respuesta = obtenerRespuesta($mensaje);
    echo $respuesta;
}
?>