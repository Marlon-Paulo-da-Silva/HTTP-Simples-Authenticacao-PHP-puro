<?php

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
// $user = "João";
// $pass = "abc123";

echo json_encode([
  'user' => $user,
  'pass' => $pass,
  'status' => 'success'
]);