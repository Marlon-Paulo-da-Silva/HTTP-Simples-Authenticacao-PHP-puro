<?php

session_start();

//define uma constante de controle
define('ROOT', true);

require_once('inc/config.php');
require_once('inc/database.php');


require_once('inc/html_header.php');

// definir rota
$rota = '';

if(!isset($_SESSION['id_admin']) && $_SERVER['REQUEST_METHOD'] != 'POST'){
  $rota = 'login';
} elseif(!isset($_SESSION['id_admin']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  $rota = 'login_submit';
} else {
  $rota = 'home';

  // se existir uma rota definida
  if(isset($_GET['r'])){
    $rota = $_GET['r'];
  }
}

// execução da rota
switch ($rota) {
  case 'login':
    require_once('login.php');
    break;

  case 'login_submit':
    require_once('login_submit.php');
    break;
  
  // após login
  case 'home':
    require_once('backoffice/home.php');
    break;
  
  case 'new_client':
    require_once('backoffice/new_client.php');
    break;
  
  default:
    echo 'Rota não definida';
    break;
}

/*
nenhum admin logado
admin logado
*/

// verifica se existe uma administrador logado
// if(!isset($_SESSION['id_admin'])){
  
//   // apresenta o quadro de login
//   require_once('login.php');
//   return;
// } else {

// }





require_once('inc/html_footer.php');