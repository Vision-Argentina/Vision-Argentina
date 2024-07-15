<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritores - Visión Argentina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Visión Argentina - Escritores</h1>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="subir-noticia">
            <h2>Subir Noticia</h2>
            <form action="subir_noticia.php" method="post">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
                <label for="contenido">Contenido:</label>
                <textarea id="contenido" name="contenido" rows="10" required></textarea>
                <button type="submit">Subir Noticia</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Visión Argentina. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
