<?php
function fnSubDominioAnterior(){
    $EnderecoCompleto = required[$_SERVER['HTTP_HOST']];
    echo "<a href=\"{$EnderecoCompleto}\"><b>Voltar</b></a>";
      
  }
?>