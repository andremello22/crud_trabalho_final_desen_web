<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Alterar</title>
  </head>
  <body class="bg-dark bg-gradient">
    <div class="container bg-dark bg-gradient ">
      <div class="row p-5  d-flex justify-content-center" >
      <div class="col-5 text-light border rounded " style=" background: rgb(253,29,29);
background: linear-gradient(180deg, rgba(253,29,29,1) 0%, rgba(107,58,180,1) 0%, rgba(226,156,58,1) 91%);" >
    <h1>Atualização dos dados de usuários</h1>
 <form action="alterar.php" method="post">
      <?php
// PHP
      $id = $_GET['id'];
     require_once('../../Service/DatabaseService.php');

$db = new DatabaseService();

     $usuarios = $db->query("SELECT * FROM usuario where id =  $id ");

 foreach($usuarios as $linha) {

     echo '   
     <input type="hidden" name="id" value="'.$id.'" >
      <div class="mb-3">
        <label for="nome" class="form-label">Nome do usuário</label>
        <input type="text" value="'.$linha['nome'].'" class="form-control" id="nome"
          name="nome" placeholder="Nome completo">
      </div>
       <div class="mb-3">
        <label for="email" class="form-label">Email do usuário</label>
        <input type="email"  value="'.$linha['email'].'" class="form-control" id="email"
          name="email" placeholder="nome@email">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha do usuário</label>
        <input type="text"  value="'.$linha['senha'].'" class="form-control" id="senha"
          name="senha" >
      </div>
      <div class="mb-3">
        <label for="matricula" class="form-label">Matricula: </label>
        <input type="text"  value="'.$linha['matricula'].'" class="form-control" id="matricula"
          name="matricula" >
      </div>
      <div class="mb-3">
        <label for="disciplina" class="form-label">Disciplina: </label>
        <input type="text"  value="'.$linha['disciplina'].'" class="form-control" id="disciplina"
          name="disciplina" >
      </div>
      
      <div class="mb-3">
        <label for="nota1" class="form-label">Nota 1: </label>
        <input type="text"  value="'.$linha['nota1'].'" class="form-control" id="nota1"
          name="nota1" >
          </div>
            
      <div class="mb-3">
        <label for="nota2" class="form-label">Nota 2: </label>
        <input type="text"  value="'.$linha['nota2'].'" class="form-control" id="nota2"
          name="nota2" >
          </div>
      <div class="mb-3">
       
        <input type="submit" class="btn btn-primary btn-lg"           value="Salvar" >
      </div>';
   
      }
        ?>
    </form>
          <div>
      <div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>