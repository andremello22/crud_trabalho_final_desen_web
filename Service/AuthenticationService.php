<?php
require_once('DatabaseService.php');


class AuthenticationService {
  private $db;
  public function __construct(){
    $this->db = new DatabaseService();
  }
  
  public function hasLogin($email, $senha) {
    $ok =false;
    //nao pode ser utilizado em um ambiente de produção
//nao foi tratado o sql inject (invasão)
//
    $usuario = $this->db->query("SELECT * FROM usuario where email='$email' and senha='$senha'");  
   
    foreach($usuario as $linha) {
      $_SESSION['autenticado']=true;
      return true;
    }
    unset($_SESSION['autenticado']);
    return false;
  }

  public function isAuthentication() {
    if (! isset($_SESSION['autenticado'])) {
      echo "<script>
       window.location.replace('index.php');
       </script>";
    }
  }
}
?>