<?php 

$conn = new PDO("mysql:host=localhost;dbname=artcar;charset=utf8", "root", "");

$stmt = $conn->prepare("SELECT nome, telefone 
	FROM tb_cliente 
	WHERE (nome LIKE '%rafael%')");

 $stmt->execute();
 $enderecos = $stmt->fetchAll();



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
    <th>Telefone</th>   
    </tr>
    <?php foreach($enderecos as $item) : ?>
    <tr>
      <td><?php echo $item["nome"]?> </td>      
      <td><?php echo $item["telefone"]?> </td>      
    </tr>
    <?php endforeach ?>
    
  </table>
  <table>
  <p></p>
  </table>
</body>
</html>

