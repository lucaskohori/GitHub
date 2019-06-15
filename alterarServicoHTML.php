<?php 

include( "conexao.php" );

$codServico = $_POST["codServico"];

$sql="SELECT tb_servicos.codServico, tb_servicos.descricao, tb_servicos.vlServico 
FROM tb_servicos 
WHERE tb_servicos.codServico = '$codServico'";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);


//foreach ($result as $row) {
	
	//echo $row['telefone']."</br>";
	//echo $row["email"]."</br>";

//}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Text</title>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html" />
<link rel="stylesheet" href="/ArtCar/BuiltIn/StarterPages/mm_training.css" type="text/css" />
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="15" nowrap="nowrap"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="2" class="logo" nowrap="nowrap">Alteração de Cadastro  <span class="tagline"></td>
	<td width="458">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td colspan="2" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td align="center" nowrap="NOWRAP" background="index.php" class="navText"><a href="index.php">HOME</a></td>
          <td align="center" nowrap="NOWRAP" background="index.php" class="navText"><a href="/ArtCar/cadastroServicosHTML.php">VOLTAR</a></td>
        </tr>
      </table>	</td>
	<td width="458">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td width="15" valign="top">&nbsp;</td>
	<td width="198"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="35" height="1" border="0" /></td>
	<td width="612" valign="top"><p>&nbsp;</p>		

	  <form id="form1" name="form1" method="post" action="alterarServico.php">
      
     <label for="codServico">Código
	  <input id="codServico" name="codServico" type="text" value="<?php echo $row['codServico'] ?>" readonly />
	  </label>
	  	  <br />
	      <br />
	  
	  <label for="descricao">Descrição:
	  <input id="descricao" name="descricao" type="text" value="<?php echo $row['descricao'] ?>" />
	  </label>
	  	  <br />
	      <br />

	  <label for="vlServico">Valor:
	  <input id="vlServico" value="<?php echo $row['vlServico'] ?>" name="vlServico" type="float" step="0.01" />
	  </label>
	  	  <br />
	      <br />

	    <p>
          <input type="submit" name="Submit" value="Gravar Dados" />
        </p>
        </p>
	    <p>&nbsp;</p>
        <p>&nbsp;  </p>
	  </form>
      </td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="198">&nbsp;</td>
    <td width="612">&nbsp;</td>
	<td width="458">&nbsp;</td>
  </tr>
</table>

</body>
</html>
