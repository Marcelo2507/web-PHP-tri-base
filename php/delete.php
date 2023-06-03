<?php

include_once('conex.php');

$token = sha1(sha1(md5($_POST["token"])));

$sql = "DELETE FROM user WHERE id_token = '$token' ";

if (mysqli_query($conn, $sql)) {
    
    header("Location:../index.html");
} else {
    echo "Erro ao excluir: " . mysqli_error($conn);
}

mysqli_close($conn);

?>