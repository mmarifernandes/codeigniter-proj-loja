<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <h1>Lista de Produtos</h1>

  <table style="background-color: rgb(178, 133, 204);" class="table">
    <thead>
        <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Id Produto</th>
        <th scope="col">Produto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">Console</th>
        <th scope="col"><th>
        <th scope="col"><th>
    

    </tr>
  </thead>
  
  <tbody>
    <?php 
    foreach ($products as $row){
      echo "<tr> <td>".$row['id']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['tipo']."</td>";
      echo "<td>".$row['quantidade']."</td>";   
      echo "<td>R$".$row['preco']."</td>";    
      echo "<td>".$row['categoria']."</td>";    
      echo "<td>".$row['console']."</td>";    

   
?>

<td>


    <a href="<?php echo base_url('editp/'.$row['id']);?>" class="btn btn-info">Edit</a>
    </td>
<td>
    <a href="<?php echo base_url('deletep/'.$row['id']);?>" class="btn btn-danger">Delete</a>
    
   </td></tr>
    

    <?php
    }// foreach
    ?>

</tr>

  </tbody>
</table> 
  </body>
  </html>
