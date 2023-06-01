<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
          echo $titulo ;
         ?>
          </title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
    <style>
      body {
        background-color: gray;
        color: white;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <img src="./img/imginicio.png" alt="Bootstrap" width="60" height="48">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Página inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Beneficiados
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./cadastro_beneficiados.php">Cadastro Familia</a></li>
            <li><a class="dropdown-item" href="./consulta_beneficiados.php">Consulta Familia</a></li>
            <li><a class="dropdown-item" href="./parenteCriar.php">Cadastro Pessoas</a></li>
            <li><a class="dropdown-item" href="./consultaParente.php">Consulta Pessoas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./fale_conosco.php">Fale Conosco</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sobre_nos.php">Sobre Nós</a>
        </li>
      </ul>
      
      
    </div>
  </div>
      <div class="navbar-nav" style="float:right;">
          <a class="nav-link" href="./login.php">Login</a>
      </div>
</nav>
<div class="container text-center">
  
