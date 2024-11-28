
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(148, 156, 57, 0.9);
           
        }
        div{ background-color: rgba(148, 156, 57, 0.9);
            background-color: rgba(22, 22, 22, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: rgb(202, 202, 57);
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="text" name="cpf" placeholder="cpf" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit">Entrar</button>
        </form>
        <br>
        <a href="cadastro.html"><button>Cadastre-se</button></a>
    </div>
</body>
</html>
    <div>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="text" name="cpf" placeholder="cpf" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
        <br>
        <a href="cadastro.html"><button>Cadastro</button></a>
    </div>
</body>
</html>




<?php
// Iniciar a sessão
session_start();

include_once ('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Preparar a consulta para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE cpf = ?");
    $stmt->bind_param("s", $cpf);  // 's' indica que a variável $nome é do tipo string

    // Executar a consulta
    $stmt->execute();

    // Obter o resultado da consulta
    $result = $stmt->get_result();
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verifica o tipo de usuário
            if ($row['tipo'] == 1) {
                // Login válido para administrador, redireciona para adm.php
                header("Location: adm.php");
            } else {
                // Login válido para outro tipo de usuário, redireciona para home
                header("Location: inicio.php");
            }
        } else {
            echo "Email ou senha inválidos.";
        }
    } else {
        // Trata erros na execução da consulta
        echo "Erro ao realizar a consulta: " . $stmt->error;
    }


    // Fechar a consulta preparada
    $stmt->close();
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
