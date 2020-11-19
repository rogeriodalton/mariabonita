<?php
$Auth = (bool)((($_SERVER['REQUEST_METHOD']=='GET') && (array_key_exists('ID', $the_request))) || ($_SERVER['REQUEST_METHOD']=='POST'));
if ($Auth==false)
  die('Acesso inválido.');

$clienteID = '';
if (array_key_exists('ID', $_GET))  
  $clienteID = $_GET['ID'];

require_once $required['Database'];
require_once $required['classNewUpdCliente'];
require_once $required['fnSubDominioAnterior'];

use Source\dba\classNewUpdCliente;
    
$Cliente = new classNewUpdCliente($_POST, $clienteID);
$Cliente->execQry();
$MensagemServidor = $Cliente->MensagemServidor;
unset($Cliente);
if ($MensagemServidor=='')
  echo '<h1>Registro gravado com sucesso!</h1>';

fnSubDominioAnterior();  

?>


