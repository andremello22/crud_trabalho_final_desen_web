<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body class=" bg-dark ">
    <div class=" container bg-dark bg-gradient d-flex justify-content-center ">
    <div class="row m-5 d-flex  d-flex align-items-center text-light">
      <div class=" p-3 mt-5 col-12 m-auto border rounded " style="background: rgb(253,29,29);
background: linear-gradient(180deg, rgba(253,29,29,1) 0%, rgba(107,58,180,1) 0%, rgba(226,156,58,1) 91%);">
    <h1>Tela de login</h1>

    <form action="login.php" method="post">
       <div class="mb-3">
        <label for="email" class="form-label">Email do usuário</label>
        <input type="email" class="form-control" id="email"
          name="email" placeholder="nome@email">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha do usuário</label>
        <input type="password" class="form-control" id="senha"
          name="senha" >
      </div>
      <div class="mb-3">
       
        <input type="submit" class="btn btn-primary btn-lg"           value="Entrar" >
      </div>
      
    </form>
      <?php
        if(isset($_GET['error'])){
          echo '<br>
            <div class="alert alert-danger" role="alert">
            dados incorretos!
            </div>';
        }
            ?>
      </div>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
  
</html>