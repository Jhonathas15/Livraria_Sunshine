<?php
$endereco = $_POST['Endereco'];

$receber_pedido = "UPDATE livraria 
SET Nome = $nome, Numero = $numero, Cidade = $cidade, Endereco = $endereco  WHERE id = '$id' ";
 
$cadstrar = mysqli_query($con, $buscar);

header('location:listar.php'); 

?>
