<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo de destino (tu Gmail)
    $to = "manuadangonzales@gmail.com"; 

    // Cabeceras del correo
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Cuerpo del correo
    $body = "<html>
                <head>
                    <title>$subject</title>
                </head>
                <body>
                    <h2>Nuevo mensaje de contacto</h2>
                    <p><strong>Nombre:</strong> $name</p>
                    <p><strong>Correo Electrónico:</strong> $email</p>
                    <p><strong>Asunto:</strong> $subject</p>
                    <p><strong>Mensaje:</strong></p>
                    <p>$message</p>
                </body>
             </html>";

    // Enviamos el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensaje enviado exitosamente. Te responderé lo antes posible.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar el mensaje. Intenta nuevamente.'); window.location.href = 'index.html';</script>";
    }
}
?>
