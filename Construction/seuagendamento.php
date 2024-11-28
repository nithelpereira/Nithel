


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agendamento</title>
</head>
<body>
    <header>
        <h2>SEU AGENDAMENTO</h2>
        <a href="index.php" class="btn-home">Home</a>
    </header>
<section>
    <?php
include_once('config.php');


// Check connection
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to get the last inserted record
$sql = "SELECT * FROM agendamentos ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
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
                <td>" . $row["nome"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["apartamento"] . "</td>
                <td>" . $row["data"] . "</td>
                <td>" . $row["hora"] . "</td>
                
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($conexao);
?>
<style>
body{
    background-color: rgba(148, 156, 57, 0.9);
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