<?php
$servername = 'localhost';
$username = 'onlyDudinha';
$password = '123';
$dbname = 'provaAv2';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$cpf = $_POST['cpf'];
$novaSala = $_POST['novaSala'];

$sql = "UPDATE candidatos SET salaprova = $novaSala WHERE cpf = '$cpf'";

if ($conn->query($sql) === TRUE) {
    echo 'Sala de prova alterada com sucesso!';
} else {
    echo 'Erro ao alterar sala de prova: ' . $conn->error;
}

$conn->close();
?>
