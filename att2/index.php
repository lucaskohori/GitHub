<?php 

include( "conexao.php" );

$sql="SELECT tb_cliente.cpf_cnpj, tb_cliente.nome, tb_cliente.telefone, tb_cliente.email
FROM tb_cliente";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Text</title>
<meta charset="utf-8" http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/ArtCar/BuiltIn/StarterPages/mm_training.css" type="text/css" />
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="15" nowrap="nowrap"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="15" height="1" border="0" /></td>
	<td height="70" colspan="2" class="logo" nowrap="nowrap">ARTCAR RENOVADORA DE VEÍCULOS   <span class="tagline"></td>
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
          <td align="center" nowrap="NOWRAP" background="index.html" class="navText"><a href="/ArtCar/incluir.html">CADASTRO DE CLIENTES</a></td>          
          <td align="center" nowrap="NOWRAP" background="index.html" class="navText"><a href="/ArtCar/cadastroServicos.html">CADASTRO DE SERVIÇOS</a></td>
          <td align="center" nowrap="NOWRAP" background="index.html" class="navText"><a href="/ArtCar/contato.html">CONTATO</a></td>
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
	  
		<table width="200" border="1" bordercolor="#000000" bgcolor="#CCCCCC" style="width:100%">
    <tr>   
    <th>Clientes</th>    
    <th>Email</th>
    <th>Telefone</th>    
    <th></th>
    <th></th>
    </tr>    
    <?php foreach ($result as $row) : ?>
    <tr>           
      <td><?php echo $row["nome"] ?> </td>      
      <td><?php echo $row["email"] ?> </td>
      <td><?php echo $row["telefone"] ?> </td>      
      <td><form action="/ArtCar/alterarHTML.php" method="post">  
  <button name="cpf_cnpj" type="submit" value="<?php echo $row["cpf_cnpj"] ?>">Editar</button>  
</form></td></form>
	  <td><form action="/ArtCar/view.php" method="post">  
  <button name="cpf_cnpj" type="submit" value="<?php echo $row["cpf_cnpj"] ?>">View</button>  
</form></td></form>
    </tr>
	<?php endforeach ?>    
    
 
  


  <table>

</body>
</html>
