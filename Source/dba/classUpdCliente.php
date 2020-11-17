<?php
namespace Source\dba;

use dbConn;

class classUpdCliente extends dbConn 
{
  public function __construct(array &$Required) 
  {
    $sql = ["UPDATE cliente 
                SET (Nome = '{$Required['Nome']}',
                     DataNascimento = '{$Required['DataNascimento']}',
                     Telefone = '{$Required['Telefone']}',
                     Email = '{$Required['Email']}',
                     CEP = '{$Required['CEP']}',
                     Rua = '{$Required['Rua']}',
                     UF = '{$Required['UF']}',
                     Cidade = '{$Required['Cidade']}',
                     Bairro = '{$Required['Bairro']}',
                     Referencia = '{$Required['Referencia']}')
              WHERE ID = {$Required['ID']}"];
    
    parent::__construct($sql);
    }
}
?>

