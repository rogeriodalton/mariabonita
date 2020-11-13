<?php
$required = require_once '/mariabonita/Source/route/required.php';
require_once $required['Database'];
require_once $required['classDelCliente'];

use Source\dba\classDelCliente;
    
$DeleteCliente = new classDelCliente($the_request);
$DeleteCliente->execQry();
$MensagemServidor = $DeleteCliente->MensagemServidor;
unset($DeleteCliente);

if ($MensagemServidor=='')
  echo "O Registro código {$_REQUEST['ID']}, foi excluído com sucesso! <br>";

echo "<a href=\"Home\"><b>Voltar</b></a>"  
?>