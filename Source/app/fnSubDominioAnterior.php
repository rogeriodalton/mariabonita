<?php
function fnSubDominioAnterior(){
    if ($_SERVER['HTTP_HOST']=='localhost')
        $EnderecoCompleto = required[$_SERVER['HTTP_HOST']];
    else
        $EnderecoCompleto ="https://{$_SERVER['HTTP_HOST']}";
    
    echo "<a href=\"{$EnderecoCompleto}\"><b>Voltar</b></a>";
      
  }
?>