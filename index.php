<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- Cadastro de Funcionários -->
<div class='container'>
    <h1 class="mt-5">Cadastro de Funcionários</h1>
    <div class="row">
        <div class="col-md-6 my-2 cadastro">
           <form form action="repostacadastro.php" method="post">
            <div class="form-group">
                    <label for="nome">Nome</label>
                        <input id="nomeFuncionario" type="text" name="name" class="form-control" placeholder="Nome">
                    <small id="nameHelp" class="form-text text-muted">Nome completo</small>                      
                    
                    <label for="name">Idade</label>
                        <input type="number" name="age" min="18" max="80" id="idade" class="form-control"> 
                    <small id="iadadeHelp" class="form-text text-muted">Maiores de 18</small>                 
                    </div>
                    
                    <button id='cadastrarF' type="submit" class="btn btn-success" >Enviar</button>
                    <button type="button" class="btn btn-primary" id="adicionarDepedente">Cadastrar Depedentes</button> 
                </div> 
                                        
              <div class="col-md-6 my-2 py-2 cadastrados"> 
                  <h2 class="h5" id="depedentesCadastrados">Depedentes cadastrados:</h2>  
                  <div id="tabelaDepedentes">
                  
                  </div>                                                   
              </div>  
            </form>   
    </div>     
</div>  
</body>
<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>