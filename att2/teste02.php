<?php 
include( "conexao.php" );
$sql="SELECT nome, telefone FROM tb_cliente WHERE nome LIKE '%lucas%'";
$result=mysqli_query($conexao, $sql);
$row=mysqli_fetch_assoc($result);
//echo($row["nome"]);
/*foreach($result as $row) {
  echo $row["nome"] . "<br/>";
  echo $row["telefone"] . "<br/>";
}*/
/*foreach($enderecos as $item)
{
   echo $item["nome"]."</br>";
   echo $item["telefone"]."</br>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Listagen de clientes</title>
  <link rel="stylesheet" href="introducaoCSS.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico" rel="stylesheet"> 
  </head>
<body>
  <h1>Clientes</h1>
  <table border="1">
    <tr>
    <th>Nome</th>    
    <th>telefone</th>   
    </tr>
    <?php foreach($result as $row) : ?>
    <tr>
      <td><?php echo $row["nome"]?> </td>      
      <td><?php echo $row["telefone"]?> </td>      
    </tr>
    <?php endforeach ?>
    
  </table>
  <table>
  <p></p>
  </table>
</body>
</html>