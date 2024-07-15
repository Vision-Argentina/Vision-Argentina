<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión Argentina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Visión Argentina</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="escritores.php">Escritores</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="noticias">
            <h2>Últimas Noticias</h2>
            <?php
            $result = $conn->query('SELECT * FROM news ORDER BY created_at DESC');
            while ($row = $result->fetch_assoc()) {
                echo '<article>';
                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
                echo '<p>' . htmlspecialchars($row['created_at']) . '</p>';
                echo '</article>';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Visión Argentina. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
