<?php 

$codOS = $_POST["codOS"];

include( "conexao.php" );

$sql="SELECT tb_cliente.cpf_cnpj, tb_servicos.codServico, tb_cliente.nome, tb_servicos.descricao, tb_servicos.vlServico
FROM tb_cliente, tb_servicos, tb_ordemservico, tb_servicosrealizados
WHERE (tb_ordemservico.codOS = '$codOS')
AND (tb_cliente.cpf_cnpj = tb_ordemservico.cpf_cnpj) 
AND (tb_ordemservico.codOS = tb_servicosrealizados.codOS)
AND (tb_servicosrealizados.codServico = tb_servicos.codServico);";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);

$cpf_cnpj = $row["cpf_cnpj"];

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
	<td height="70" colspan="2" class="logo" nowrap="nowrap">ORDENS DE SERVIÇO DO CLIENTE <?php echo $row["nome"] ?>   <span class="tagline"></td>
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
		
		
	  
		<table width="200" border="1" bordercolor="#000000" bgcolor="#CCCCCC" style="width:100%">
      <tr>   
    <th>Serviços</th>    
    <th>Descrição</th>       
    <th>Valor</th>  
    </tr>   
    <?php foreach ($result as $row) : ?>
    <tr>           
      <td><?php echo $row["codServico"] ?> </td>      
      <td><?php echo $row["descricao"] ?> </td>
      <td><?php echo $row["vlServico"] ?> </td>              
       
    </tr>
	<?php endforeach ?>	
	<tr>
    	<th><strong>Valor Total</strong>
    		<td></td>
    		<td><strong><?php $sql = "SELECT SUM(vlServico)  
FROM tb_servicos, tb_cliente, tb_servicosrealizados, tb_ordemservico
WHERE (tb_ordemservico.codOS = '$codOS')
AND (tb_cliente.cpf_cnpj = tb_ordemservico.cpf_cnpj)
AND (tb_ordemservico.codOS = tb_servicosrealizados.codOS)
AND (tb_servicosrealizados.codServico = tb_servicos.codServico);";

$result = mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);

echo $row["SUM(vlServico)"];

?></strong></td>
    	</th>
    </tr>
    </table>
    
  <table>

</body>

<?php $conexao->close(); ?>

</html>
