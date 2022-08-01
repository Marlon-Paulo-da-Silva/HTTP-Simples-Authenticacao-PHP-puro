<?php

// verifica se existe user e passa dentro da request HTTP
if(empty($_SERVER['PHP_AUTH_USER'])){
  if(empty($_SERVER['PHP_AUTH_PW'])){
    echo json_encode([
      'status' => 'ERROR',
      'message' => 'Invalid access'
    ]);
    exit();
  }

}

// usuários permitidos
$usuario = array();
$usuarios = [
  [
    'user' => 'Joao',
    'pass' => 'abc123'
  ],
  [
    'user' => 'Ana',
    'pass' => 'Ana123'
  ],
  [
    'user' => 'Roberto',
    'pass' => 'Robertoabc123'
  ],
];

// verifica se user e pass tem autenticação válida
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$valid_authentication = false;

foreach($usuarios as $usu){
  if($usu['user'] == $user && $usu['pass'] == $pass){
    $valid_authentication = true;
  }
}

// invalid authentication
if(!$valid_authentication){
  echo json_encode([
    'status' => 'ERROR',
    'message' => 'Invalid authentication credentials.'
  ]);
  exit();
}
