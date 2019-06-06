<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "artcar";

$conexao = mysqli_connect( $dbhost, $dbuser, $dbpasswd )
or die( "Não foi possível conectar-se ao servidor MySQL" );

$selectdb = mysqli_select_db( $conexao, $dbname )
or die( "Não foi possível selecionar o banco de dados <b>$dbname</b>" );

mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, "SET character_set_connection=utf8");
mysqli_query($conexao, "SET character_set_client=utf8");
mysqli_query($conexao, "SET character_set_results=utf8");

?>
