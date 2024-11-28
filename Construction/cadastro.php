<?php
include_once ('config.php');
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar dados do formulário
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Hash da senha para segurança
  

    // Query para inserir os dados na tabela
    $sql = "INSERT INTO usuarios (cpf, nome, telefone, email, senha) 
            VALUES ('$cpf','$nome', '$telefone', '$email', '$senha')";

    // Executar a query e verificar o resultado
    if ($conexao->query($sql) === TRUE) {
        // Redirecionar para a página de login
        header("Location: login.php");
        exit(); // Sempre use exit após header
    } else {
        echo "Erro ao cadastrar usuário: " . $conexao->error;
    }
}

// Fechar conexão com o banco de dados
$conexao->close();
?>
