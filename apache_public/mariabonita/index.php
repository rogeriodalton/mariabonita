<?php
ini_set('default_charset', 'utf-8'); 
$minPHPVersion = '7.3';
$PHP_Version = phpversion();
if ($PHP_Version < $minPHPVersion)
	die("Esse website requer PHP {$minPHPVersion} ou superior. <br> Versão atual: {$PHP_Version}");

$SP = '/mariabonita/Source';
define ('varSystem', require_once "{$SP}/route/vars.php");
define ('required',  require_once "{$SP}/route/required.php");

$RequestMethod = '';
if (array_key_exists('REQUEST_METHOD', $_SERVER)==true)
    $RequestMethod = $_SERVER['REQUEST_METHOD'];
	
switch($RequestMethod){
    case  'GET': if (array_key_exists('url', $_GET)){
                   define('the_request', $_GET);
                   define('url', the_request['url']);
                 }  
                 break;
		
    case 'POST': $_POST['url'] = $_REQUEST['url'];
                 define('the_request', $_POST);
                 define('url', the_request['url']);
	         break; 
}

if (!defined('url'))
    require_once varSystem['Home'];  
else 
if (array_key_exists(url, varSystem)){
    define('arquivo', varSystem[url]);
if (!(file_exists(arquivo)))
	die("o caminho solicitado " . url . " existe no entanto o arquivo não foi encontrado no servidor");
    require_once arquivo;
}	
else
  require_once varSystem['NotFound'];
	
?>
