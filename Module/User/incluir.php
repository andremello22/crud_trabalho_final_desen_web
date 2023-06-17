<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Incluir (confirmaçõa)</title>
  </head>
  <body class="bg-dark pt-5 ">
   
  <div class="container text-light bg-dark bg-gradient mt-5 rounded">
     <h1>Inclusão de usuários</h1>
    <?php

//var_dump($_GET);
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$matricula = $_POST['matricula'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

try {
  
  require_once('../../Service/DatabaseService.php');

$db = new DatabaseService();


$sql = "CREATE TABLE IF NOT EXISTS usuario (
  id INTEGER PRIMARY KEY AUTOINCREMENT, 
  nome TEXT,
  email TEXT, 
  senha TEXT,
  matricula INTEGER,
  disciplina TEXT,
  nota1 REAL,
  nota2 REAL
)";

$db->exec($sql);

  $sql =  "INSERT INTO usuario (nome, email, senha, matricula, disciplina, nota1, nota2) 
      VALUES ('$nome', '$email', '$senha', '$matricula',
      '$disciplina', '$nota1', '$nota2')";

  // Execute statement
  $db->exec($sql);

  echo '
  <div class="alert alert-success" role="alert">
  Dados  inseridos com sucesso!
</div>
  <a href="consultar.php" class="btn btn-primary btn-lg"> Voltar</a>
';
    
  // Garbage collect db
  $db = null;
} catch (PDOException $ex) {
  echo $ex->getMessage();
}
  ?>

  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

