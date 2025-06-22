<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$servername = "sql212.infinityfree.com";
    $username = "if0_39295246";
    $password = "C0ntr01Cinf";
    $database = "if0_39295246_gymrat";
    $conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM Employees WHERE username='$username' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['logado'] = true;
    header("Location: index2.html");
    exit;
} else {
    echo "Login inválido.";
}
$conn->close();
?>
