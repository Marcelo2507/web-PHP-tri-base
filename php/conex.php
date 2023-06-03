<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "banco";

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");
// Verifica se houve algum erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>