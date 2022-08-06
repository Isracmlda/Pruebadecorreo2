<?php
    $destinatario = 'elcarmenalajuelacatequesis@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $header = "Prueba de correo";
    $mensajeCompleto=$mensaje."\nAtentamente: ".$nombre;
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo"<script>alert('Correo enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>