<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Consultar la base de datos para obtener el ID y la contraseña hash del usuario
    $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    // Verificar si se encontró un usuario y si la contraseña coincide
    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Iniciar sesión y redirigir a la página de escritores
        $_SESSION['user_id'] = $user_id;
        header('Location: escritores.php');
        exit();
    } else {
        // Si el usuario o la contraseña son incorrectos, mostrar mensaje de error
        echo 'Usuario o contraseña incorrectos';
    }

    // Cerrar la consulta
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
