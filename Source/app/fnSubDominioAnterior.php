<?php
function fnSubDominioAnterior(){
    $EnderecoCompleto = $_SERVER['HTTP_REFERER'];
    $Flag = '/';
    $aTextoCompleto = str_split($EnderecoCompleto);
      $aNovoTexto = [];
      $Letras = count($aTextoCompleto);
      $i=$Letras;
      do {
         $i--;
      } 
      while (($i > 0) && ($aTextoCompleto[$i]<>$Flag));

      $ii=0;
      do {
          array_push($aNovoTexto, $aTextoCompleto[$ii]);    
          $ii++;
      } while ($ii < $i);

      unset($aTextoCompleto);
      $Home = implode($aNovoTexto);
      unset($aNovoTexto);
      echo "<a href=\"{$Home}\"><b>Voltar</b></a>";
      
  }
?>