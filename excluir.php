<?php

include 'conexao.php';

$id = $_POST['id'];

$receber_pedido = "DELETE FROM livraria 
WHERE id = '$id' ";
 
$cadstrar = mysqli_query($con, $buscar);

header('location:listar.php'); 

?>
