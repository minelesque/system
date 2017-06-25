<?php

require("conn.ini.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM SERVICOS WHERE SERVICO='ENCERAMENTO CRISTALIZADO'";

if ($conn->query($sql) === TRUE) {
    echo "Deletado";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>