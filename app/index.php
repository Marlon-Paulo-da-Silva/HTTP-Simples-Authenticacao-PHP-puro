<?php

echo "Olá, Mundo";
echo "<hr>";
// request á API com pedido de autenticação / autorização

function api_request($endpoint, $user, $pass)
{
  $curl = curl_init($endpoint);
  $headers = array(
    'Content-Type: application/json',
    'Authorization: Basic'
  );
}
