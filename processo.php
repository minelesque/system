<?php
require("conn.ini.php");

$sql = "SELECT servico, preco, tempo FROM servicos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "Serviço: " . $row["servico"]. " - Preço: " . $row["preco"]. " - Tempo: " . $row["tempo"]. "<br>";
        
    }
} else {
    echo "0 results";
}
$conn->close();

?>

