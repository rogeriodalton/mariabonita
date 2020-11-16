<?php
  function fnUrlReferencia(string $subdominio){
     $asubdominio = '/'. $subdominio;
    if (array_key_exists('SCRIPT_URI', $_SERVER))
       $destino = str_replace($_SERVER['SCRIPT_URI'], $asubdominio, $_SERVER["REDIRECT_SCRIPT_URI"]);
    else 
       $destino = $_SERVER['HTTP_REFERER'] . $subdominio;  

    echo $destino;
  }
?>