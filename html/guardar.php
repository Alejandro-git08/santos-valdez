<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar datos
    if(empty($nombre) || empty($email) || empty($telefono) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    $linea = "Nombre: $nombre | Email: $email | Teléfono: $telefono | Mensaje: $mensaje" . PHP_EOL;

    // Guardar datos en archivo datos.txt
    file_put_contents("datos.txt", $linea, FILE_APPEND | LOCK_EX);

    // Redirigir al formulario
    header("Location: contacto.php?success=1");
    exit;
} else {
    echo "Acceso no permitido.";
}
?>
