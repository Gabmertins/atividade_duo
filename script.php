<?php
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = "$url_atual/assets/json/duvidas.json";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$lista_tarefa = json_decode(curl_exec($ch));
