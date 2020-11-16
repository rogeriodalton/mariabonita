<?php
ini_set('default_charset', 'utf-8'); 

$varSystem = require_once '/home/storage/6/0b/e6/mariabonitaservi1/cfg/Source/route/vars.php';

$the_request = [];
$RequestMethod = '';
if (array_key_exists('REQUEST_METHOD', $_SERVER)==true)
	$RequestMethod = $_SERVER['REQUEST_METHOD'];
$url = (string)'';
switch($RequestMethod){
case 'GET':	$the_request = &$_GET;
            $url = &$the_request['url'];			
            break;
			
case 'POST': $the_request = &$_POST;
             $url = $_REQUEST['url'];
			 break; 
}

if ($url=='')
	require_once $varSystem['Home'];  
else 
if (array_key_exists($url, $varSystem)){
	$arquivo = $varSystem[$url];
	if (!(file_exists($arquivo)))
		die('<h1>' . $url . '  não encontrado </h1>');
	require_once $arquivo;
}	
else
  require_once $varSystem['NotFound'];
	
?>