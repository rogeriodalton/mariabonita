<?php
ini_set('default_charset', 'utf-8'); 

$varSystem = require_once '/mariabonita/Source/route/vars.php';

$the_request = [];
$RequestMethod = '';
if (array_key_exists('REQUEST_METHOD', $_SERVER)==true)
	$RequestMethod = $_SERVER['REQUEST_METHOD'];

switch($RequestMethod){
case 'GET':	$the_request = &$_GET;
			break;
			
case 'POST': $the_request = &$_POST;
			 break; 
}

$EhHome = (empty($the_request)); 
if ($EhHome){
	require_once $varSystem['Home'];  
	die();
} else
if ($RequestMethod == 'GET'){
  $url = &$the_request['url'];
} else
if ($RequestMethod == 'POST'){
  $url = $_REQUEST['url'];
}

// Identifica URL e abre caso exista no arquivo de rotas ---// 
// em UNIX e Linux  /mariabonita/Source/route/vars.php      //
// em Windows     C:\mariabonita\Source\route\vars.php      //
//----------------------------------------------------------//
if (array_key_exists($url, $varSystem))
{
	$arquivo = $varSystem[$url];
	if (!(file_exists($arquivo)))
		die('<h1>' . $url . '  não encontrado </h1>');

	require_once $arquivo;
}	
else
  require_once $varSystem['NotFound'];
	
?>