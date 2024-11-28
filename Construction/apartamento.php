<?php
include_once('config.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar dados do formulário
    $tipo = $_POST['tipo'];
    $numero_apartamento = $_POST['numero_apartamento'];
    $endereco = $_POST['endereco'];
    $valor = $_POST['valor'];
    $quartos = $_POST['quartos'];
    $banheiros = $_POST['banheiros'];
    $vagas = $_POST['vagas'];
    $imagem = $_FILES["imagem"];
    
    // Lidar com o upload de arquivo
    $target_dir = "imagem/";
    $target_file = $target_dir . basename($imagem["name"]);
    move_uploaded_file($imagem["tmp_name"], $target_file);

    // Insere os dados no banco de dados
    $sql = "INSERT INTO imoveis (tipo, numero_apartamento, endereco, valor, quartos, banheiros, vagas, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    
    // Bindar os parâmetros
    $stmt->bind_param("ssssssss", $tipo, $numero_apartamento, $endereco, $valor, $quartos, $banheiros, $vagas, $target_file);
    $stmt->execute();
    
    // Fechar a declaração e a conexão
    $stmt->close();
    $conexao->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imóveis</title>
    <link rel="stylesheet" href="./partials/apartamentos.css">
</head>
<body>
    <h1>Cadastro de Imóveis</h1>
    <form class="form-container" action="apartamento.php" method="post" enctype="multipart/form-data">
        <label for="tipo">Tipo de Imóvel:</label>
        <select id="tipo" name="tipo">
            <option value="apartamento">Apartamento</option>
            <option value="casa">Casa</option>
            <option value="terreno">Terreno</option>
        </select>
        <label for="numero_apartamento">Número do Apartamento:</label>
        <input type="text" id="numero_apartamento" name="numero_apartamento" placeholder="Apenas para apartamentos">
        
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required>

        <label for="quartos">Quartos:</label>
        <input type="number" id="quartos" name="quartos">

        <label for="banheiros">Banheiros:</label>
        <input type="number" id="banheiros" name="banheiros">

        <label for="vagas">Vagas na Garagem:</label>
        <input type="number" id="vagas" name="vagas">

        <label for="imagem">Imagem do Imóvel:</label>
        <input type="file" id="imagem" name="imagem">

        <button type="submit">Cadastrar</button>
    </form>
    
</body>
</html>