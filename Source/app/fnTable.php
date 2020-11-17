<?php
function fnTable($dados = [], $titulo = [], string $PrimeiroCampo = 'param_ID', string $fnSelecionar ='CadastroCliente?ID=', string $fnDelete = 'ClienteExcluir?ID='){
    $tit = count($titulo);
    $reg = count($dados);
    $html = array();
    if ($reg == 0)
      die('Nenhum registro encontrado');  
    else
    if (($tit > 0) && ($reg > 0)){
          $html[] = "<table id='TableFilter' border='1'>\n";
          $html[]= "<tr>\n";
          $html[] = "<th width='1' colspan = 1} scope='col'>";
          $html[] = 'Item';
          $html[] = "</th>";
  
      foreach($titulo as $campo){
          $html[] = "<th width='{$campo['tamanho']}' colspan = {$campo['colspan']} scope='col'>";
          $html[] = ($campo['nome']);
          $html[] = "</th>";
      };
      $html[] = "</tr>\n";
    };
   
      $arrayFlag = [];
      $arrayResult = [];
          foreach ($dados as $a) {
              if (is_array($a)==false){
                  $arrayResult = array_diff($dados, $arrayFlag);
                  if (count($arrayResult) > 0) {
                      foreach($dados as $chave=>$valor){
                          if($chave==$PrimeiroCampo){
                              $html[] = "<tr>"; //nova linha
                              $html[] = "<td align=center>";
                              $html[] = "<a href=\"{$fnSelecionar}{$dados['param_ID']}\"><b>Abrir</b></a>" ;
                              $html[] = '<br>';  
                              $html[] = "<a href=\"{$fnDelete}{$dados['param_ID']}\"><b>Excluir</b></a>" ;  
                              $html[] = "</td>\n";
                          }
                          if(substr($chave, 0, 6) <> 'param_'){
                              $html[] = "<td>";
                              $html[] = nl2br($valor);
                              $html[] = "</td>";
                          }
                      }
                    $arrayFlag = $dados;  
                  }
                      
              }else
              {
                  foreach($a as $chave=>$valor){
                      if($chave==$PrimeiroCampo){
                          $html[] = "<tr>"; //nova linha
                          $html[] = "<td align=center>"; 
                          $html[] = "<a href=\"{$fnSelecionar}{$a['param_ID']}\"><b>Abrir</b></a>" ;  
                          $html[] = '<br>';
                          $html[] = "<a href=\"{$fnDelete}{$a['param_ID']}\"><b>Excluir</b></a>" ;                            
                          $html[] = "</td>\n";
                      }
                      if(substr($chave, 0, 6) <> 'param_')
                      {
                          $html[] = "<td>";
                          $html[] = nl2br($valor);
                          $html[] = "</td>";
                      }
                  }
              }
          }
          $html[] = "</tr>\n";
      
      echo implode($html);
  }
?>
