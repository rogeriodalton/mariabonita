<?php

namespace Source\dba;

use dbConn;

class classNewUpdCliente extends dbConn 
{
  public function __construct(array $Required, string $clienteID) 
  {

  if ($clienteID=='')
      $sql = ["INSERT INTO cliente (Nome, 
                                    DataNascimento,
                                    Telefone,
                                    Email,
                                    CEP,
                                    Rua,
                                    UF,
                                    Cidade,
                                    Bairro,
                                    Referencia)
                    VALUES ('{$Required['Nome']}',
                            '{$Required['DataNascimento']}',
                            '{$Required['Telefone']}',
                            '{$Required['Email']}',
                            '{$Required['CEP']}',
                            '{$Required['Rua']}',
                            '{$Required['UF']}',
                            '{$Required['Cidade']}',
                            '{$Required['Bairro']}',
                            '{$Required['Referencia']}')"];
  else
      $sql = ["UPDATE cliente 
                SET Nome = '{$Required['Nome']}',
                    DataNascimento = '{$Required['DataNascimento']}',
                    Telefone = '{$Required['Telefone']}',
                    Email = '{$Required['Email']}',
                    CEP = '{$Required['CEP']}',
                    Rua = '{$Required['Rua']}',
                    UF = '{$Required['UF']}',
                    Cidade = '{$Required['Cidade']}',
                    Bairro = '{$Required['Bairro']}',
                    Referencia = '{$Required['Referencia']}'
              WHERE ID = {$clienteID}"];
  
    parent::__construct($sql);
    }
}

?>