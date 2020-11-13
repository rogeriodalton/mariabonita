<?php
if (($_SERVER['REQUEST_METHOD'] == 'GET') && (array_key_exists('ID', $the_request)))
  $clienteID = $the_request['ID'];
else  
if ($_SERVER['REQUEST_METHOD'] <> 'POST')
  die('Acesso inválido.');

$required = require_once '/mariabonita/Source/route/required.php';
require_once $required['Database'];
require_once $required['classNewUpdCliente'];

use Source\dba\classNewUpdCliente;
    
$Cliente = new classNewUpdCliente($the_request);
$Cliente->execQry();
$MensagemServidor = $Cliente->MensagemServidor;
unset($Cliente);

if ($MensagemServidor=='')
  echo '<h1>Registro gravado com sucesso!</h1>';

  echo "<a href=\"Home\"><b>Voltar</b></a>"
?>