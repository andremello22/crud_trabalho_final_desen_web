<?php
session_start();
require_once('Service/AuthenticationService.php');
$authenticationService = new AuthenticationService();
$authenticationService->isAuthentication();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body class="row bg-dark pt-5">
    <div class=" col-10 mt-5 container text-light border rounded" style="height: 400px; width: 400px; background: rgb(253,29,29);
background: linear-gradient(180deg, rgba(253,29,29,1) 0%, rgba(107,58,180,1) 0%, rgba(226,156,58,1) 91%)">
    <h1 class="text-center p-3">Sistema de alunos</h1>
      <h3 class="p-2 mb-2">O que deseja fazer? </h3>
   
      <div class=" row m-3">
    <a href="Module/User/consultar.php" class="btn btn-primary m-1"> Módulo de Alunos  </a><br>
      <a href="Module/User/relatorio.php" class="btn btn-success m-1">Relatório de alunos  </a><br>
    <a href="sair.php" class="btn btn-danger m-1"> Sair </a><br>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>