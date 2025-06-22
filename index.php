<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $island = $_POST["island"];
    $email = $_POST["email"];

    // Conexão com a base de dados
    $servername = "sql212.infinityfree.com";
    $username = "if0_39295246";
    $password = "C0ntr01Cinf";
    $database = "if0_39295246_gymrat";
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserir dados
    $sql = "INSERT INTO Costumer (name, island, email) VALUES ('$name', '$island', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Registo inserido com sucesso.";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}
?>
