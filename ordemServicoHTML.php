<?php 

$cpf_cnpj = $_POST["cpf_cnpj"];

include( "conexao.php" );

$sql="SELECT codServico, descricao FROM tb_servicos";
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
	<td height="70" colspan="2" class="logo" nowrap="nowrap">Lan&ccedil;ar Ordem de Servi&ccedil;o <span class="tagline"></span></td>
	<td width="100%">&nbsp;</td>
	</tr>

	<tr bgcolor="#FF6600">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="4" border="0" /></td>
	</tr>

	<tr bgcolor="#D3DCE6">
	<td colspan="4"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
	</tr>

	<tr bgcolor="#FFCC00">
	<td width="15" nowrap="nowrap">&nbsp;</td>
	<td width="705" colspan="2" height="24">
	<table border="0" cellpadding="0" cellspacing="0" id="navigation">
        <tr>
          <td class="navText" align="center" nowrap="nowrap"><a href="/Artcar/index.php">HOME</a></td>
        </tr>
      </table>	</td>
	<td width="100%">&nbsp;</td>
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
	<td width="35"><img src="/ArtCar/BuiltIn/StarterPages/mm_spacer.gif" alt="" width="35" height="1" border="0" /></td>
	<td width="710" valign="top"><br />
	&nbsp;<br />
	<table border="0" cellspacing="0" cellpadding="2" width="500">
		<tr>
		<td class="pageName">&nbsp;</td>
		</tr>

		<tr>

			
		<td class="bodyText"><form id="form1" name="form1" method="post" action="ordemServico.php">
		  <label>Ordem de Serviço
		    <input type="text" name="codOS" required />
		    </label>
		  <p>
		    <label for="cpf_cnpj">CPF/CNPJ
	  <input id="cpf_cnpj" name="cpf_cnpj" type="text" value="<?php echo $cpf_cnpj ?>" readonly="readonly"/>	      
      </label>
		  </p>
		  <p>
		    <label>Modelo
		    <input type="text" name="modelo_veiculo" required />
		    </label>
		  </p>
		  <p>
		    <label>Marca
		    <input type="text" name="marca_veiculo" required />
		    </label>
</p>
		  <p>
		    <label>Placa
		    <input type="text" name="placa" required />
		    </label>
		  </p>
		  <p>
		    <label>Servico 1</label>
		<select name="servico1" id="servico1">
			<?php foreach($result as $row) : ?>
			<option value="<?php echo $row['codServico'] ?>"><?php echo $row['codServico']." - ".$row["descricao"]?></option>
			<?php endforeach ?>			
		</select>
		  </p>
		  <p>
		  	<label>Servico 2</label>
		<select name="servico2" id="servico2">
			<?php foreach($result as $row) : ?>
			<option value="<?php echo $row['codServico'] ?>"><?php echo $row['codServico']." - ".$row["descricao"]?></option>
			<?php endforeach ?>			
		</select>
		  </p>
		  <p>
		  	<label>Servico 3</label>
		<select name="servico3" id="servico3">
			<?php foreach($result as $row) : ?>
			<option value="<?php echo $row['codServico'] ?>"><?php echo $row['codServico']." - ".$row["descricao"]?></option>
			<?php endforeach ?>			
		</select>
		  </p>
		  <p>
		  	<label>Servico 4</label>
		<select name="servico4" id="servico4">
			<?php foreach($result as $row) : ?>
			<option value="<?php echo $row['codServico'] ?>"><?php echo $row['codServico']." - ".$row["descricao"]?></option>
			<?php endforeach ?>			
		</select>
		  </p>
		  <p>
		  	<label>Servico 5</label>
		<select name="servico5" id="servico5">
			<?php foreach($result as $row) : ?>
			<option value="<?php echo $row['codServico'] ?>"><?php echo $row['codServico']." - ".$row["descricao"]?></option>
			<?php endforeach ?>			
		</select>
		  </p>
		  <p>
		    <label>Descrição
		    <input type="text" name="descricao" />
		    </label>	
		    <br>
		    <input type="submit" name="Submit" value="Gravar Dados" />	  
		</form>		</td>
		</tr>
		<tr>
		  <td class="bodyText">&nbsp;</td>
	    </tr>
	</table>
	 <br />	</td>
	<td>&nbsp;</td>
	</tr>

	<tr>
	<td width="15">&nbsp;<br />
	&nbsp;<br />	</td>
    <td width="35">&nbsp;</td>
    <td width="710">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
<?php $conexao->close(); ?>
</html>
