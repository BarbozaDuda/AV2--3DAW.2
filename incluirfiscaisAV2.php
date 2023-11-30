<?php
$servername = 'localhost';
$username = 'OnlyDudinha';
$password = '123';
$dbname = 'provaAv2';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$sala = $_POST['sala'];
$fiscal1 = $_POST['fiscal1'];
$fiscal2 = $_POST['fiscal2'];

$sql = "UPDATE candidatos SET fiscal_1 = '$fiscal1', fiscal_2 = '$fiscal2' WHERE salaprova = $sala";

if ($conn->query($sql) === TRUE) {
    echo 'Fiscais incluídos com sucesso!';
} else {
    echo 'Erro ao incluir fiscais: ' . $conn->error;
}

$conn->close();
?>
