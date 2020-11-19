<?php
    function fnUrlReferencia(string $SubDominio, array &$the_request){
        $aSubDominio = '/'. $SubDominio;
        //$aHome = retornaDominioAnterior('/', $_SERVER["HTTP_REFERER"]);
  
        $aID = (string)'';
        if (array_key_exists('ID', $the_request))
           $aID = "?ID={$the_request['ID']}";  

        if (array_key_exists('SCRIPT_URI', $_SERVER))
            $destino = str_replace($_SERVER['SCRIPT_URI'], $aSubDominio, $_SERVER["REDIRECT_SCRIPT_URI"]);
        else 
            $destino = "{$_SERVER["HTTP_REFERER"]}{$SubDominio}" ;
        
        echo $destino . $aID;
    }
?>