<?php
$servername = "bfc63qjcojiyzmdsjyqv-mysql.services.clever-cloud.com:3306";
$username = "uyyssop40cx5od7x";
$password = "ckFtNYrdqA9tKbzjZNmu";
$dbname = "bfc63qjcojiyzmdsjyqv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
