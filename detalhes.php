<?php

require("connect.php");

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM usuario WHERE id = '$id'");

while ($consulta=mysqli_fetch_array($sql)) {
	echo "Nome: ".$consulta['nome']."<br>";
	echo "Telefone    : ".$consulta['telefone']."<p>";		
}

?>