<?php

// incluir as dependencias
require_once('../inc/authentication.php');

echo json_encode([
  'status' => 'SUCCESS',
  'message' => 'API running OK!!'
]);