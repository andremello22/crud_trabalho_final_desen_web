<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Módulo de Alunos</title>
  </head>
  <body class=" bg-dark bg-gradient pt-5 pb-5">
    <div class="container mb-5 mt-5 bg-dark bg-gradient">
     <div class="  border rounded bg-light mt-1 p-3"> 
    <h1 class="m-5"> Usuários do sistema</h1>


    <?php
require_once('../../Service/DatabaseService.php');

$db = new DatabaseService();

$usuarios = $db->query("SELECT * FROM usuario");

echo '<table class="mt-3 border  table table-striped">';
echo ' <thead>
<tr>
<th scope="col">Id</th>
<th  scope="col">Nome</th>
<th scope="col">Email</th>
<th scope="col">Senha</th>
<th scope="col">matricula</th>
<th scope="col">disciplina</th>
<th scope="col">AV1</th>
<th scope="col">AV2</th>
<th scope="col"></th>
<th scope="col"></th>
<tr> 
</thead>';

echo '<tbody>';
  foreach($usuarios as $linha) {
    echo ' <tr>
        <th scope="row">'.$linha['id'].'</th>
        <td>'.$linha['nome'].'</td>
        <td>'.$linha['email'].'</td>
        <td>'.$linha['senha'].'</td>
        <td>'.$linha['matricula'].'</td>
        <td>'.$linha['disciplina'].'</td>
        <td>'.$linha['nota1'].'</td>
        <td>'.$linha['nota2'].'</td>
        <td>
        <a class="btn btn-danger" href="excluir.php?id='.$linha['id'].'"> Excluir</a> 
        
        </td>
        <td>
         <a class="btn btn-primary" href="formulario_alterar.php?id='.$linha['id'].'"> Alterar</a>
        </td>';
    
    
  }
echo '</tbody>';
echo'</table>';
  echo'<div>
             <div class="row p-3">
    <div class="col">
      <a href="../../menu.php" class="btn btn-success">Voltar</a>
    </div>
    <div class="col">
      <a href="relatorio.php" class="btn btn-dark">Gerar relatório</a>
    </div>
    <div class="col">
      <a class="btn btn-primary" href="formulario_inclusao.php">Incluir</a>
    </div>
  </div>
  </div>
      ';
?>
     </div>
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