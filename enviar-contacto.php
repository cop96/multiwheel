<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $servicio = strip_tags(trim($_POST["servicio"]));
    $mensaje = strip_tags(trim($_POST["mensaje"]));

    // Recipients
    $to = "direccion@multiwheel.es, info@marketmovil.es";
    $subject = "Nueva solicitud de presupuesto: $servicio";

    // Email body
    $email_content = "Has recibido un nuevo mensaje desde el Catálogo Online de Multiwheel.\n\n";
    $email_content .= "Nombre: $nombre\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Teléfono: $telefono\n";
    $email_content .= "Servicio: $servicio\n\n";
    $email_content .= "Mensaje:\n$mensaje\n";

    // Headers
    $headers = "From: Multiwheel Web <no-reply@multiwheel.es>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirigir a una página de éxito
        header("Location: contacto.php?mensaje=enviado");
    }
    else {
        // Redirigir con error
        header("Location: contacto.php?mensaje=error");
    }
}
else {
    header("Location: contacto.php");
}
?>