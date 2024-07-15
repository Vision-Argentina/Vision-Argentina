<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Visión Argentina</title>
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
        <section id="login">
            <h2>Iniciar Sesión</h2>
            <form action="authenticate.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Visión Argentina. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
