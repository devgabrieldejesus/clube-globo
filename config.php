<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://clubeglobo.pc/"); //Colocar o nome do virtual host de produção
	$config['dbname'] = 'clube_globo'; // nome do db local
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root'; // usuario do db local
	$config['dbpass'] = ''; // senha do db local
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
} else {
	define("BASE_URL", ""); // Site hospedado
	$config['dbname'] = ''; // nome do Db da hospedagem
	$config['host'] = 'localhost';
	$config['dbuser'] = ''; // Usuario do db
	$config['dbpass'] = ''; // senha do db
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
}

global $db;
try {
	$db = new PDO("mysql:charset=utf8;dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],$options);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}