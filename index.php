<?php 

include( "conexao.php" );

$sql="SELECT tb_cliente.cpf_cnpj, tb_cliente.nome, tb_cliente.telefone, tb_cliente.email
FROM tb_cliente";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Home Page</title>
<meta charset= "charset=utf-8" http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="/ArtCar/BuiltIn/StarterPages/mm_training.css" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 36px}
.style6 {font-size: larger}
.style7 {font-size: 14px; }
-->
</style>
</head>
<body bgcolor="#64748B">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr bgcolor="#26354A">
	<td width="17" nowrap><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="15" height="1" border="0"></td>
	<td height="70" colspan="3" nowrap class="logo style3"><span class="style6">ArtCar</span> <span class="tagline">| <span class="style2">Renovadora de Ve&iacute;culos</span> </span></td>
	<td width="234">&nbsp;</td>
	<td width="129">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0"></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0"></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="17" nowrap>&nbsp;</td>
	<td colspan="3" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td align="center" nowrap background="PROF-CADAST.html" class="navText"><a href="/ArtCar/incluir.html" class="style7">Cadastro de Clientes</a></td>         
          <td align="center" nowrap background="CadastroPeca.html" class="navText"><a href="/ArtCar/servicosHTML.php" class="style1">SERVIÇOS </a></td>          
          <td class="navText" align="center" nowrap><a href="contato.html" class="style1">Contato</a></td>
        </tr>
      </table>	</td>
	<td width="234">&nbsp;</td>
	<td width="129">&nbsp;</td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0"></td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="6"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0"></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="2" valign="top" bgcolor="#26354A"><img src="/ArtCar/imagens/exotic-car-shop-scottsdale.jpg" width="288" height="430"><br>
	<table border="0" cellspacing="0" cellpadding="0" width="230">
		<tr>
		<td width="230" background="CadastroCliente.html" class="sidebarText" id="padding">R. Rio Grande do Norte, 86 - Campo Pequeno, Colombo</td>
		</tr>
	</table>	</td>
	<td width="51" valign="top"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="50" height="1" border="0"></td>
	<td width="596" valign="top"><br>
	<br>
	<form action="" method="post" name="form1" class="style2">
	  <div align="center" class="pageName style1">
	    <h1>Sistema de Controle Interno        </h1>
	  </div>
	</form>
	
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
  <button name="cpf_cnpj" type="submit" value="<?php echo $row["cpf_cnpj"] ?>">Ordens de Serviço</button>  
</form></td></form>
    </tr>
	<?php endforeach ?>
    </table>
	<br>	
	<br>	</td>
	<td width="234">&nbsp;</td>
	<td width="129">&nbsp;</td>
	</tr>
	

	<tr bgcolor="#D3DCE6">
	<td colspan="6"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0"></td>
	</tr>

	<tr>
	<td width="17">&nbsp;</td>
	<td width="239">&nbsp;</td>
	<td width="51">&nbsp;</td>
	<td width="596">&nbsp;</td>
	<td width="234">&nbsp;</td>
	<td width="129">&nbsp;</td>
	</tr>
</table>
</body>
</html>