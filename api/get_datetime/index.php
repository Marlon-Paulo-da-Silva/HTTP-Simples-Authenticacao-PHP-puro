<?php

$now = new DateTime();

echo json_encode([
  'status' => 'SUCCESS',
  'data' => $_GET,
  'message' => $now->format('d-m-y H:i:s')
]);