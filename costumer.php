<?php
$servername = "sql212.infinityfree.com";
$username = "if0_39295246";
$password = "C0ntr01Cinf";
$database = "if0_39295246_gymrat";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM Costumer";
$result = $conn->query($sql);

echo "<h2>Lista de Clientes</h2>";
echo "<table border='1'>
        <tr><th>ID</th><th>Nome</th><th>Ilha</th><th>Email</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['island']}</td><td>{$row['email']}</td></tr>";
}

echo "</table>";
$conn->close();
?>
