<?php

$cep = "60511270";
$link = "https://viacep.com.br/ws/$cep/json/";

$loc = curl_init($link);

curl_setopt($loc, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($loc, CURLOPT_SSL_VERIFYPEER, 0);

$resultado = curl_exec($loc);

$dados = json_decode($resultado, true);


print_r($dados);
?>