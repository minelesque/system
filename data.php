<?php
require("conn.ini.php");
//conecta ao servidor mysql

//seleciona a base de dados
$sql = "SELECT data FROM agenda";
$result = $conn->query($sql);

//imprimir um campo select
echo "<select name=\"data\" id=\"data\">";

if ($result->num_rows > 0) {
    // output data of each row
    
    while($dados = $result->fetch_assoc()) {
    
    echo "<option value='".$dados['data']."'>".$dados['data']."</option>";
} 
}
$conn->close();

?>


