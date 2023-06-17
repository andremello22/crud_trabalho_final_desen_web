<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

require_once('Service/AuthenticationService.php');

$authenticationService = new AuthenticationService();

if ($authenticationService->hasLogin($email, $senha)) {
   echo "<script>
   window.location.replace('menu.php');
   </script>";
  die();
}else {
   echo "<script>
   window.location.replace('index.php?error=true');
   </script>";
}
