<?php

session_start();

if(isset($_GET['nome']) && isset($_GET['senha'])){
    include_once('conex.php');
	
$nome = $_GET['nome'];

$senha = sha1(md5(sha1($_GET['senha'])));
	
    $sql = 'SELECT * FROM user WHERE nome ="'.$nome.'" AND senha ="'.$senha.'"';
        $result = $conn->query($sql);

        // Checa se o usuário foi encontrado
        if ($result->num_rows > 0) {
            // Inicia a sessão e salva o email do usuário nela
            
            $_SESSION[$nome] = $nome;

					echo "cadastrado com sucesso";
            // Redireciona para a página inicial
            header("Location: ../index.html");
        } else {
            // Caso contrário, exibe mensagem de erro e redireciona para a página de login
            echo "Email ou senha incorretos.";
           
        }
    }
?>