<?php

namespace Source\dba;

use dbConn;

class classSelCliente extends dbConn 
{
  public function __construct(array &$Required) 
  {
    $clienteID='';
    if (array_key_exists('ID', $Required))
      $clienteID = $Required['ID'];

    $SELECT = "SELECT ID as param_ID,
                            Nome,
                            DATE_FORMAT(DataNascimento, '%d/%m/%Y') as Data_Nascimento, 
                            DATE_FORMAT(DataNascimento, '%Y-%m-%d') as param_Data_Nascimento, 
                            Telefone,
                            Email,
                            CEP,
                            Rua,
                            UF,
                            Cidade,
                            Bairro,
                            Referencia
                       FROM cliente";

    if ($clienteID=='')
      $sql = ["{$SELECT}
                ORDER BY Nome, ID"];
    else       
      $sql = ["{$SELECT}
                WHERE ID = {$clienteID} 
                LIMIT 1"];
    
    parent::__construct($sql);
    }
}
?>