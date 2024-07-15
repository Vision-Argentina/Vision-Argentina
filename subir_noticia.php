<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    $stmt = $conn->prepare('INSERT INTO news (title, content, created_at) VALUES (?, ?, NOW())');
    $stmt->bind_param('ss', $title, $content);
    if ($stmt->execute()) {
        echo 'Noticia subida exitosamente';
    } else {
        echo 'Error al subir la noticia';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Noticia - Visión Argentina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Visión Argentina</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="escritores.php">Escritores</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="escritores">
            <h2>Subir Nueva Noticia</h2>
            <form action="subir_noticia.php" method="post">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
                <label for="content">Contenido:</label>
                <textarea id="content" name="content" required></textarea>
                <button type="submit">Subir Noticia</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Visión Argentina. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
