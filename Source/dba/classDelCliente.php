<?php

namespace Source\dba;

use dbConn;

class classDelCliente extends dbConn 
{
  public function __construct(array &$Required) 
  {
    $clienteID='';
    if (array_key_exists('ID', $Required))
      $clienteID = $Required['ID'];
 
    $sql = ["DELETE FROM cliente WHERE ID = {$clienteID}"];
    
    parent::__construct($sql);
    }
}
?>