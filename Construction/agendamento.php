<?php
include_once('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apartamento =  $_POST['apartamento'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO agendamentos (apartamento, data, hora, nome, email) VALUES ('$apartamento', '$data', '$hora', '$nome', '$email')";

    if (mysqli_query($conexao, $sql)) {
        // Redirecionar para a página de confirmação
        header('Location: seuagendamento.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conexao);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Visita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #cfe0bc;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(148, 156, 57, 0.9);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        main {
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            color: #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(148, 156, 57, 0.9);
            background-color: rgba(22, 22, 22, 0.9);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: rgba(148, 156, 57, 0.9);
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Agende Sua Visita ao Apartamento</h1>
    </header>

    <main>
        <form action="agendamento.php" method="POST">
            <label for="apartamento">Escolha o Apartamento:</label>
            <select id="apartamento" name="apartamento" required>
                <option value="apto1">Apartamento 101 - 2 Quartos</option>
                <option value="apto2">Apartamento 102 - 3 Quartos</option>
                <option value="apto3">Apartamento 103 - 1 Quarto</option>
                <option value="apto4">Apartamento 104 - 2 Quartos</option>
                <br></br>
                <option value="apto3">Apartamento 201 - 1 Quarto</option>
                <option value="apto4">Apartamento 202 - 2 Quartos</option>
                <option value="apto3">Apartamento 203 - 1 Quarto</option>
                <option value="apto4">Apartamento 204 - 2 Quartos</option>

                <option value="apto3">Apartamento 301 - 1 Quarto</option>
                <option value="apto4">Apartamento 302 - 2 Quartos</option>
                <option value="apto3">Apartamento 303 - 1 Quarto</option>
                <option value="apto4">Apartamento 304 - 2 Quartos</option>
            </select>

            <label for="data">Escolha a Data da Visita:</label>
            <input type="date" id="data" name="data" required>

            <label for="hora">Escolha o Horário:</label>
            <input type="time" id="hora" name="hora" required>

            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

            <label for="email">Seu E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Seu e-mail" required>

            <button type="submit">Confirmar Agendamento</button>
        </form>
    </main>

</body>
</html>
