<?php

echo "Olá, Mundo";
echo "<hr>";
// request á API com pedido de autenticação / autorização

api_request("http://localhost/HTTP-Simples-Authenticacao-PHP-puro/api/", "Joao", "abc123");

function api_request($endpoint, $user = NULL, $pass= NULL)
{
  $curl = curl_init($endpoint);
  $headers = array(
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode("$user:$pass")
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $response = curl_exec($curl);

  if(curl_errno($curl)){
    throw new Exception(curl_error($curl));
  }

  curl_close($curl);

  echo $response;

}
