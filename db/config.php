<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'todotasks';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Conexão Falhou.')</script>");
}
?>
