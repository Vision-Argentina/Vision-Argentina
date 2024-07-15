<?php
$host = 'bfc63qjcojiyzmdsjyqv-mysql.services.clever-cloud.com';
$db = 'bfc63qjcojiyzmdsjyqv';
$user = 'uyyssop40cx5od7x';
$pass = 'ckFtNYrdqA9tKbzjZNmu';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
?>
