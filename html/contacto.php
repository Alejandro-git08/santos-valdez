<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - IA aplicada a la salud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="icon" href="../img/logo.png">
</head>
<body>

<!-- Barra superior -->
<div class="top-bar">
  <div class="social-icons">
    <a href="#"><i class="bi bi-facebook"></i></a>
    <a href="#"><i class="bi bi-twitter"></i></a>
    <a href="#"><i class="bi bi-instagram"></i></a>
    <a href="#"><i class="bi bi-linkedin"></i></a>
  </div>
</div>

<!-- Barra principal -->
<header class="main-header">
  <h1><img src="../img/logo.png" alt="Logo" style="width:50px;height:50px;"> IA aplicada a la salud</h1>
  <nav>
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="acerca.html">Acerca de</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>
</header>

<!-- Hero -->
<section class="hero">
  <h2>Contacta con nosotros</h2>
</section>

<!-- Formulario de contacto -->
<section class="contacto">
  <h2>Envíanos un mensaje</h2>

  <?php
    // Mensaje de confirmación si ya se envió
    if(isset($_GET['success']) && $_GET['success'] == 1){
        echo "<p style='color:green; font-weight:bold;'>¡Gracias! Tu mensaje ha sido enviado correctamente.</p>";
    }
  ?>

  <form action="guardar.php" method="post">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" pattern="[0-9]{8}" required>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" required></textarea>

    <button type="submit">Enviar</button>
  </form>
</section>

<!-- Footer -->
<footer>
  <div class="footer-container">

    <div class="social-icons">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
  <p>Autores: Alejandro Santos y Nicole Valdez | &copy; 2025 Todos los derechos reservados</p>
</footer>

</body>
</html>
