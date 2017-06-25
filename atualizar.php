<?php

require("conn.ini.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("falhou ao conectar: " . $conn->connect_error);
}

$sql = "UPDATE Servicos SET servico='LAVAGEM EXTERNA COM ENCERAMENTO' WHERE servico='LAVAGEM EXTERNA'";

if ($conn->query($sql) === TRUE) {
    echo "Atualizado com sucesso";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>