<?php

function obtenerRespuesta($mensaje)
{
    $respuestas = array(
        "Hola" => "¡Hola! ¿Cómo puedo ayudarte?",
        "¿Cómo estás?" => "Estoy siendo un bot, así que no tengo emociones, pero estoy aquí para ayudarte.",
        "Adiós" => "¡Hasta luego! Si tienes más preguntas, no dudes en volver.",
        "Por que no puedo comprar cosas" => "tienes que iniciar session o hacerte una cuanta para poder comprar nuestros productos",
        "por que no puedo comprar cosas" => "tienes que iniciar session o hacerte una cuanta para poder comprar nuestros productos",
        "cuando traen mas variedad" => "Estamos trabajando en ello espere nuestras notificaciones",
        "hay devoluciones" => "para devolver algun producto debe ponerse en contacto con nosotros",
        // Agrega más patrones de mensajes y respuestas aquí
    );

    $mensaje = trim($mensaje);

    foreach ($respuestas as $patron => $respuesta) {
        if (stripos($mensaje, $patron) !== false) {
            return $respuesta;
        }
    }

    return "Lo siento, no entendí tu pregunta. ¿Podrías reformularla?";
}

?>