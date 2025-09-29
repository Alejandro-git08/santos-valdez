<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar datos
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar campos
    if(empty($nombre) || empty($email) || empty($telefono) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Preparar línea de texto
    $linea = "Nombre: $nombre | Email: $email | Teléfono: $telefono | Mensaje: $mensaje" . PHP_EOL;

    // Guardar en archivo datos.txt
    file_put_contents("datos.txt", $linea, FILE_APPEND | LOCK_EX);

    // Redirigir al formulario con mensaje de éxito
    header("Location: contacto.php?success=1");
    exit;
} else {
    echo "Acceso no permitido.";
}
?>
