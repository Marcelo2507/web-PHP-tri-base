<?php

include_once('conex.php');

$token = sha1(sha1(md5($_POST["token"])));

$nome = $_POST["nome"];
$senha = sha1(md5(sha1($_POST["senha"])));

$sql = "UPDATE user 
				SET
										nome = '$nome',
										senha = '$senha'
				WHERE
										id_token = '$token'";

if (mysqli_query($conn, $sql)) {
    
    header("Location:../index.html");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}

mysqli_close($conn);

?>