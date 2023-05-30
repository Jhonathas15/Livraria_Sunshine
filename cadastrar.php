<?php

include 'conexao.php';

$nome = $_POST['Nome'];
$numero = $_POST['Numero'];
$cidade = $_POST['Cidade'];
$endereco = $_POST['Endereco'];

$receber_pedido = "INSERT INTO livraria 
VALUES ('', '$nome', '$numero', '$cidade', '$endereco' )";
 
$cadstrar = mysqli_query($con, $buscar);

header('location:listar.php'); 

?>
