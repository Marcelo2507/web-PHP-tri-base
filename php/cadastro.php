<?php

include_once('conex.php');

$nome = $_POST["nome"];
$senha = sha1(md5(sha1($_POST["senha"])));
$token = sha1(sha1(md5($_POST["token"])));

$sql = "INSERT INTO user (nome, senha, id_token) VALUES ('$nome', '$senha', '$token')";

if (mysqli_query($conn, $sql)) {
    
    header("Location:../index.html");
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}

mysqli_close($conn);

?>