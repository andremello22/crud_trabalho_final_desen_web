<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Relatórios</title>
  </head>
  <body class="bg-dark bg-gradient pb-5 mb-5">
    <div class="container bg-dark bg-gradient pb-5 pt-5 mt-5 mb-5">
    <div class="border rounded row p-5 mt-3 bg-light">  
    <h1> Usuários do sistema</h1>

     
    <?php
require_once('../../Service/DatabaseService.php');

$db = new DatabaseService();

$usuarios = $db->query("SELECT * FROM usuario");


echo '<table class="table table-striped ">';
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
<th scope="col">Média</th>
<th scope="col">Situação</th>
<th scope="col"></th>
<th scope="col"></th>
<tr> 
</thead>';

echo '<tbody>';
  foreach($usuarios as $linha) {
    $nota1= floatval(str_replace(',','.', $linha['nota1']));
    $nota2= floatval(str_replace(',','.', $linha['nota2']));
    $media = ($nota1 + $nota2) /2;
    if($media>6){
    echo ' <tr>
        <th scope="row">'.$linha['id'].'</th>
        <td>'.$linha['nome'].'</td>
        <td>'.$linha['email'].'</td>
        <td>'.$linha['senha'].'</td>
        <td>'.$linha['matricula'].'</td>
        <td>'.$linha['disciplina'].'</td>
        <td>'.$linha['nota1'].'</td>
        <td>'.$linha['nota2'].'</td>
         <td>'.$media.'</td>
        <td>aprovado</td>
      </tr>'
      ;
      
 
          
    }
    else{ 
      echo ' <tr>
        <th scope="row">'.$linha['id'].'</th>
        <td>'.$linha['nome'].'</td>
        <td>'.$linha['email'].'</td>
        <td>'.$linha['senha'].'</td>
        <td>'.$linha['matricula'].'</td>
        <td>'.$linha['disciplina'].'</td>
        <td>'.$linha['nota1'].'</td>
        <td>'.$linha['nota2'].'</td>
        <td>'.$media.'</td>
        <td>reprovado</td>
      </tr>'
       ;
     
    }
        
  }
  echo '</tbody>';
     echo '</table>'; 
?>
  
<div class="row d-flex justify-content-around mt-3">
  
  <a href="../../menu.php" class="btn btn-primary col-3 pe-5 "> voltar para menu</a>

      
<a href="consultar.php" class="btn btn-warning col-3 ms-5 "> voltar para área de aluno</a>
    
        </div>
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