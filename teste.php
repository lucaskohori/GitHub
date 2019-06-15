<?php

include( "conexao.php" );

$sql="SELECT tb_ordemservico.codOS, tb_cliente.nome, tb_servicos.descricao, tb_servicos.vlServico
FROM tb_cliente, tb_servicos, tb_ordemservico, tb_servicosrealizados
WHERE (tb_cliente.cpf_cnpj = tb_ordemservico.cpf_cnpj) 
AND (tb_ordemservico.codOS = tb_servicosrealizados.codOS)
AND (tb_servicosrealizados.codServico = tb_servicos.codServico);";

$result=mysqli_query($conexao, $sql);

$row=mysqli_fetch_assoc($result);


?>


<table border="1">
    <tr>
    <th><?php echo $row["nome"] ?></th>    
    <th>Valor do Servico</th>   
    </tr>
    <?php foreach($result as $row) : ?>
    <tr>
      <td><?php echo $row["descricao"]?> </td>      
      <td><?php echo $row["vlServico"]?> </td>      
    </tr>
    <?php endforeach ?>
    
  </table>
  <table>

