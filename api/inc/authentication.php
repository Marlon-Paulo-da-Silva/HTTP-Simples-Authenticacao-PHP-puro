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


// verificar se a autenticação é válida
require_once('config.php');
require_once('database.php');

$db = new database();

$params = [
  ':user' => $_SERVER['PHP_AUTH_USER'],
  ':pass' => $_SERVER['PHP_AUTH_PW']
];


$results = $db->EXE_QUERY("SELECT id_client FROM `authentication` WHERE username = :user AND passwrd = :pass", $params);
if(count($results) > 0){
  $valid_authentication = true;
} else {
  $valid_authentication = false;
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



// invalid authentication
if(!$valid_authentication){
  echo json_encode([
    'status' => 'ERROR',
    'message' => 'Invalid authentication credentials.'
  ]);
  exit();
}

