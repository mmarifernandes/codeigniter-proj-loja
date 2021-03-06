<?php if (\Config\Services::validation()->getErrors()){
?>

<div class="alert alert-danger" role="alert">
<?= \Config\Services::validation()->listErrors();?>
</div>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/clienteregister.css')?>">

  <title>Document</title>
</head>
<body>
  

<h1>Cadastrar Cliente</h1>
<form action="insertdata" method="post">
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Nome completo:</label>
            <input type="text" class="form-control" id="nameInputLabel" name="nome" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">E-mail:</label>
            <input type="text" class="form-control" id="emailInputLabel" name = "email" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
          </div>
        </div>
        
      
        <button type="submit" class="btn btn-success" name="submit">Cadastrar</button>
</form>
</body>
</html>