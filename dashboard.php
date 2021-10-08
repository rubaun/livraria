<?php

session_start();

include 'conecta-banco.php';
include 'ferramentas.php';

//verifica se o usuário está logado
if(!isset($_SESSION['autenticado']) && !isset($_SESSION['usuario'])){
  
  echo 'Acesso não autorizado!<br>';
  echo '<a href="acesso-clube.php">Efetuar Login</a>';
  die();

}

//Logout
if(array_key_exists('sair',$_POST)){
  session_destroy();
  header('Location: index.php');
  die();
}

include 'template_dashboard.php';

?>
