<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Agendamento</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
</head>

<body topmargin="0">
<form name="form1" method="post" action="">
  <table width="698" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="center" bgcolor="#003366">
      <td height="39" colspan="5"><span class="style3">SISTEMA DE AGENDAMENTO - MORAES DETAIL </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="145"><span class="style1"></span></td>
      <td width="270"><span class="style1"></span></td>
      <td width="102">&nbsp;</td>
      <td width="102"><span class="style1"></span></td>
      <td width="79"><span class="style1"></span></td>
    </tr>
    <tr>
      <td><span class="style1">Data:</span></td>
      <td><span class="style1">
        <?php include("data.php"); ?>
      </span></td>
      <td><span class="style1">Hor&aacute;rio: </span></td>
      <td><span class="style1"> 
        <select name="select">
          <option>08:00 - 10:00</option>
          <option>10:00 - 12:00</option>
          <option>12:00 - 14:00</option>
          <option>14:00 - 16:00</option>
          <option>16:00 - 18:00</option>
        </select>
      </span></td>
      <td><span class="style1"></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1"></span></td>
      <td><span class="style1"></span></td>
      <td>&nbsp;</td>
      <td><span class="style1"></span></td>
      <td><span class="style1"></span></td>
    </tr>
    <tr align="center" bgcolor="#FF9900">
      <td height="44" colspan="5"><span class="style5">SELECIONE O SERVI&Ccedil;O DESEJADO </span></td>
    </tr>
    <tr align="center">
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr align="center">
      <td colspan="5"><span class="style1">
        <?php include("servi.php"); ?>
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center" bgcolor="#FF9900">
      <td height="36" colspan="5"><span class="style5">DETALHES DO VE&Iacute;CULO</span></td>
    </tr>
    <tr>
      <td><span class="style1"></span></td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Tipo de ve&iacute;culo: </span></td>
      <td align="left"><select name="select">
        <option>Passeio</option>
        <option>Utilit&aacute;rio</option>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Cor:</span></td>
      <td align="left">        <select name="select2">
        <option selected>-</option>
          <option>Amarelo</option>
          <option>Vermelho</option>
          <option>Branco</option>
          <option>Preto</option>
          <option>Prata</option>
          <option>Azul claro</option>
          <option>Azul escuro</option>
          <option>Bege</option>
          <option>Cinza</option>
          <option>Vinho</option>
        </select>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Bancos de couro:</span></td>
      <td align="left">        <select name="select3">
          <option>Sim</option>
          <option>N&atilde;o</option>
                        </select>      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1"></span></td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center" bgcolor="#FF9900">
      <td height="40" colspan="5"><span class="style5">SERVI&Ccedil;OS PRIME - MORAES DETAIL </span></td>
    </tr>
    <tr>
      <td><span class="style1"></span></td>
      <td align="left"><span class="style1"></span></td>
      <td>&nbsp;</td>
      <td><span class="style1"></span></td>
      <td><span class="style1"></span></td>
    </tr>
    <tr align="center">
      <td colspan="5"><span class="style1">
        <?php include("prime_server.php"); ?>
      </span></td>
    </tr>
    <tr>
      <td><span class="style1"></span></td>
      <td align="left"><span class="style1"></span></td>
      <td>&nbsp;</td>
      <td><span class="style1"></span></td>
      <td><span class="style1"></span></td>
    </tr>
    <tr align="center" bgcolor="#FF9900">
      <td height="38" colspan="5"><span class="style5">INFORME OS SEUS DADOS </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Nome:</span></td>
      <td align="left"><input type="text" name="textfield"></td>
      <td><span class="style1">Pagamento: </span></td>
      <td><select name="select4">
        <option>Dinheiro</option>
        <option>Cart&atilde;o D&eacute;bito</option>
        <option>Cart&atilde;o Cr&eacute;dito</option>
            </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Telefone:</span></td>
      <td align="left"><input type="text" name="textfield2"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style1">Endere&ccedil;o:</span></td>
      <td align="left"><input name="textfield3" type="text" size="50"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center">
      <td colspan="5"><span class="style1"></span><span class="style1"></span><span class="style1"><img src="btn.png" width="177" height="74"></span></td>
    </tr>
  </table>
</form>
</body>
</html>
