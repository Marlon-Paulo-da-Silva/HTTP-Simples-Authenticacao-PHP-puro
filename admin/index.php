<?php

session_start();

//define uma constante de controle
define('ROOT', true);

require_once('inc/config.php');
require_once('inc/database.php');


require_once('inc/html_header.php');



// verifica se existe uma administrador logado
if(!isset($_SESSION['id_admin'])){
  
  // apresenta o quadro de login
  require_once('login.php');
  return;
} else {

}



echo '<h3>Olá, Mundo</h3>';




require_once('inc/html_footer.php');