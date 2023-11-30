<?php
$servername = 'localhost';
$username = 'OnlyDudinha';
$password = '123';
$dbname = 'provaAv2';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
}

$sql = 'SELECT * FROM candidatos ORDER BY salaprova, nome';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo 'Nome: ' . $row['nome'] . '<br>';
        echo 'CPF: ' . $row['cpf'] . '<br>';
        echo 'Identidade: ' . $row['identidade'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'Cargo que procura: ' . $row['cargo_pretendido'] . '<br>';
        echo 'Sala de prova: ' . $row['salaprova'] . '<br>';
        echo '<br>';
    }
} else {
    echo 'Nenhum candidato encontrado.';
}

$conn->close();
?>
