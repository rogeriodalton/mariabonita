<?php
$required = require_once '/mariabonita/Source/route/required.php';
require_once $required['Database'];
require_once $required['classDelCliente'];
require_once $required['fnSubDominioAnterior'];

use Source\dba\classDelCliente;
    
$DeleteCliente = new classDelCliente($the_request);
$DeleteCliente->execQry();
$MensagemServidor = $DeleteCliente->MensagemServidor;
unset($DeleteCliente);

if ($MensagemServidor=='')
  echo "O Registro código {$_REQUEST['ID']}, foi excluído com sucesso! <br>";


fnSubDominioAnterior();  
?>