<?php
require("conn.ini.php");
//conecta ao servidor mysql

//seleciona a base de dados
$sql = "SELECT servico FROM servicos";
$result = $conn->query($sql);

//imprimir um campo select
echo "<select name=\"usuarios\" id=\"usuarios\">";

if ($result->num_rows > 0) {
    // output data of each row
    
    while($dados = $result->fetch_assoc()) {

    echo "<option value='".$dados['servico']."'>".$dados['servico']."</option>";
} 
}
$conn->close();

?>


