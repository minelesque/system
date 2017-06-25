<?php

require("connect.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("CONEÇÃO COM A BASE DE DADOS FALHOU: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$telefone = $_POST['telefone'];
$selecionar =$_POST['acao'];
//switch ($request['acao']) {
 
	//case "testando":
		$sql = "INSERT INTO usuario(nome, login, senha, telefone)
		VALUES ('$nome', '$login', '$senha', '$telefone')";

		if ($conn->query($sql) === TRUE) {
    	echo "INSERIDO COM SUCESSO!";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	//break;
//}



?>