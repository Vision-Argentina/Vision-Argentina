<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = htmlspecialchars($_POST['titulo']);
    $contenido = htmlspecialchars($_POST['contenido']);

    $stmt = $conn->prepare('INSERT INTO news (title, content) VALUES (?, ?)');
    $stmt->bind_param('ss', $titulo, $contenido);
    if ($stmt->execute()) {
        header('Location: escritores.php');
        exit();
    } else {
        echo 'Error al subir la noticia';
    }
}
?>
