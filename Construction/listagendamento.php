<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
    <a href="adm.php" class="btn-home">Home</a>  
    </header>

<section>
<?php
include_once('config.php');

// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the search term from the query string
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Prepare and execute the SQL query with parameterized query to prevent SQL injection
$sql = "SELECT nome, email, apartamento, data, hora 
        FROM agendamentos 
        WHERE nome LIKE ? OR email LIKE ?";
$stmt = mysqli_prepare($conexao, $sql);

// Bind parameters to the SQL query
$param = "%" . $searchTerm . "%";
mysqli_stmt_bind_param($stmt, 'ss', $param, $param);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>AGENDAMENTOS</h2>";
    echo "<table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Apartamento</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . htmlspecialchars($row["nome"]) . "</td>
            <td>" . htmlspecialchars($row["email"]) . "</td>
            <td>" . htmlspecialchars($row["apartamento"]) . "</td>
            <td>" . htmlspecialchars($row["data"]) . "</td>
            <td>" . htmlspecialchars($row["hora"]) . "</td>
        </tr>";
        
    }
    echo "</table>";
} else {
    echo "<h2>Nenhum agendamento encontrado para este apartamento.</h2>";
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
<style>
body{
    background-color: grey;
    }
    table {
  border-collapse: collapse;
  width: 50%;
  margin-left: 25%;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2; 

}

th {
  background-color: #808080;
  color: white; 

}
h2{
    text-align: center;
    color: #f2f2f2;
}
.btn-home {
  background-color: #808080;
  border: 2px solid white;
  border-radius: 5px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition: all 0.3s ease;
  
}

.btn-home:hover {
  background-color: #3e8e41;
}

</style>

</section>
</body>
</html>