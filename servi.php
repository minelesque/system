<?php

require("conn.ini.php");

$sql = "SELECT servico, preco, tempo FROM servicos";
$result = $conn->query($sql);
echo "<table border=\"0\" width=\"100%\">";


echo "<tr>
	  <td>Item</td>
      <td>Serviço</td>
      <td>Preço</td>
      </tr>";
while($row = $result->fetch_assoc()){
   //echo "<tr><td>Teste:</td>";
   echo "<tr>";
   echo " <td><input name=\"checkbox\" type=\"checkbox\" value=".$row["servico"]."</td>";
   echo "<td>".$row["servico"]."</td>";
   echo "<td>".$row["preco"]."</td>";
   echo "</tr>";
}
echo "</table>";

?>