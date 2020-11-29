<?php
function fnBuscaCEP(): array{
  $CEP = $_REQUEST['CEP'];
  $json_url = "https://viacep.com.br/ws/{$CEP}/json";
  $json = file_get_contents($json_url);
  $json = str_replace('},]',"}]",$json);
  return json_decode($json);   
}

?>