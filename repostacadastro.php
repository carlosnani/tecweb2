<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Realizado com Sucesso</title>
</head>
<body>
 
<div class="container py-5">
<h3>Funcinário</h3>
<p><strong>Nome:</strong> <?php echo htmlspecialchars($_POST['name']); ?><strong><br>
Idade:</strong> <?php echo (int)$_POST['age']; ?></p>

<h4>Depedentes Cadastrados</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo htmlspecialchars($_POST['nodeDepedente']); ?></td>
      <td> <?php echo (int)$_POST['idadeDepedente']; ?></td>
    </tr>
  </tbody>
</table>
</div>




</div>
</body>
</html>