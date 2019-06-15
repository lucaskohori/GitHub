<?php 

$cpf_cnpj = $_POST["cpf_cnpj"];

include( "conexao.php" );

$sql="SELECT tb_cliente.cpf_cnpj, tb_cliente.nome, tb_ordemservico.modelo_veiculo, tb_ordemservico.marca_veiculo, tb_ordemservico.codOS, tb_ordemservico.descricao, tb_ordemservico.dtregister, date_add(tb_ordemservico.dtregister, interval 5 day) as dateadd
FROM tb_cliente, tb_ordemservico 
WHERE tb_cliente.cpf_cnpj = '$cpf_cnpj' AND tb_cliente.cpf_cnpj = tb_ordemservico.cpf_cnpj";

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
	<td height="70" colspan="2" class="logo" nowrap="nowrap">ORDENS DE SERVIÇO   <span class="tagline"></td>
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
		<p><strong><?php echo $row["nome"] ?></strong> </p>
	  
		<table width="200" border="1" bordercolor="#000000" bgcolor="#CCCCCC" style="width:100%">
      <tr>   
    <th>Ordem de Serviço</th>
    <th>Modelo do Veículo</th>
    <th>Marca Do Veículo</th>
    <th>Data</th>
    <th>Data de entrega</th>
    <th></th>    
    </tr>   
    <?php foreach ($result as $row) : ?>
    <tr>           
      <td><?php echo $row["codOS"] ?> </td>  
      <td><?php echo $row["modelo_veiculo"] ?> </td> 
      <td><?php echo $row["marca_veiculo"] ?> </td>     
      <td><?php echo $row["dtregister"] ?> </td> 
      <td><?php echo $row["dateadd"];
//var_dump($row["cpf_cnpj"]);

       ?></td> 
       <?php $codOS = $row["codOS"] ?>                
      <td><form action="/ArtCar/detalhes.php" method="post">
  <button name="codOS" type="submit" value="<?php echo $codOS ?>">Detalhes</button>
</form></td></form>	  
    </tr>
	<?php endforeach ?>
    </table>
  <table>
<p><form action="/ArtCar/ordemServicoHTML.php" method="post">
  <button name="cpf_cnpj" type="submit" value="<?php echo $cpf_cnpj ?>">Criar nova ordem de serviço</button>
</form></p>
</body>

</html>
