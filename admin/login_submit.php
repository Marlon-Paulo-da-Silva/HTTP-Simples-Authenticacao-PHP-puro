<?php defined('ROOT') or die('Acesso inválido'); ?>

<?php
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso inválido');
  }

  $usuario = $_POST['text_usuario'];
  $senha = $_POST['text_senha'];

  // validação
  if(empty($usuario) || empty($senha)){
    $_SESSION['error'] = 'Dados insuficientes';

    header('Location: index.php');
    return;

  }

  $bd = new Database();
  $params = [
    ':usuario' => $usuario,
  ];

  $resultados = $bd->EXE_QUERY('SELECT * FROM admin_users where username = :usuario', $params);
  
  // verifica se existe resultado
  if(count($resultados) == 0){
    $_SESSION['error'] = 'Login inválido';
    header('Location: index.php');
    return;
  }

  // validar a password/senha
  if(!password_verify($senha, $resultados[0]['passwrd'])){
    $_SESSION['error'] = 'Login inválido';
    header('Location: index.php');
    return;
  }

  //colocar o administrador na sessão
  $_SESSION['id_admin'] = $resultados[0]['id_admin'];
  $_SESSION['usuario'] = $resultados[0]['username'];

  // redirecionar para a página inicial (index)
  header('Location: index.php');

?>