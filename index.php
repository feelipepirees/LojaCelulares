<?php
     namespace PHP\Modelo;
     require_once('DAO\Conexao.php');
     use PHP\Modelo\DAO\Conexao;
 
?>
 
<!doctype html>
<html lang="pt-BR">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ipobre</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body style="background-image:url('Imagem/fundo-1.png');background-size:100%;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ipobre</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="DAO\ChamarPessoa.php">Cadastrar Cliente</a></li>
            <li><a class="dropdown-item" href="DAO\">Cadastrar Funcionario</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cadastrar V</a></li>
          </ul>
        </li>
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ConsultarCodigo.php">Consultar Estoque</a></li>            
          </ul>
        </li>        
 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Atualizar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="PaginaAtualizar.php">Cadastro</a></li>            
          </ul>
        </li>      
 
 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Excluir
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Excluir Cadastro</a></li>            
          </ul>
        </li>    
       
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Localizar</button>
      </form>
    </div>
  </div>
</nav>
  <br><br><br><br><br><br>

       
<div class="container text-center">
                      <div class="row">
                        <div class="col">
                         <div class="card" style="width: 18rem;">
                              <img src="Imagem/GalaxyPocket.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Galaxy Pocket </h5>
                                <p class="card-text">Smartphone Samsung Galaxy Pocket / prateado</p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="Imagem/nokiatijolao.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nokia 310</h5>
                              <p class="card-text">Smartphone Nokia 310 <br> muito resistente</p>
                              <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                        <div class="card" style="width: 18rem;">
                          <img src="Imagem/sonyericsson.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><br><br>Sony Ericsson</h5>
                            <p class="card-text">Smartphone Sony Ericsson <br><br> Resistente e bonito <br> </p>
                            <a href="#" class="btn btn-primary"> Comprar</a>
                          </div>
                          </div>
                        </div>
                      </div>
  </div>
 
 

</body>
</html>
 