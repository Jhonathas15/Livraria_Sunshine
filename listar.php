<?php

include 'conexao.php';

$buscar = "SELECT * FROM livraria" ;
$cadstrar = mysqli_query($con, $buscar);

?>


<!doctype html>
    <html lang="en">
    <head>

        <title>Pedido</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

        <h1>Livraria Sunshine</h1>
        <hr>
        
    <div class = "container">
       <table class="table"> 

            <thead>
                <tr>
                    <th>id</th>
                    <th>NOME</th>
                    <th>NUMERO</th>
                    <th>CIDADE</th>
                    <th>ENDEREÇO</th>

                </tr>
            </thead>
            <tbody>

 <?php

 while($receber_pedido = mysqli_fetch_array($cadstrar)){

     $id = $receber_pedido ['id'];
     $nome = $receber ['Nome'];
     $numero = $receber_pedido ['Numero'];
     $cidade = $receber_pedido ['Cidade'];
     $endereco = $receber_pedido [ 'Endereco'];
?>

                <tr>
                    <td scope="row"><?php  echo $id; ?></td>
                    <td> <input type = "text" name = "NBome"  value = "<?php  echo $id; ?>"> <?php  echo $nome; ?>  </td>
                    <td> <input type = "text" name = "Numero"  value = "<?php  echo $id; ?>"> <?php  echo $numero; ?>  </td>
                    <td>  <input type = "text" name = "Cidade"  value = "<?php  echo $id; ?>"> <?php  echo $cidade; ?>  </td>
                    <td> <input type = "text" name = "Endereco"  value = "<?php  echo $id; ?>"> <?php  echo $endereco; ?>  </td>                  
                </tr>
<?php };?>

            
     <tr>

      <form action = "cadastar.php" method = "post">
         <td></td>
         <td> <input type = "text" name = "Nome"> </td>
         <td><input type = "text" name = "Numero"></td>
         <td><input type = "text" name = "Cidade"></td>
         <td><input type = "text" name = "Endereco"></td>

        <td> 

        <form action = "excluir.php" method = "post">
        <input type = "hidden" name = "id"  value = "<?php  echo $id; ?>">
        <input type = "submit" value = "Excluir">

        </td>

         <td><input type = "submit" value = "Cadastrar"></td>

    </tr>

            </tbody>
        </table>

</div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   
        
    </html>
