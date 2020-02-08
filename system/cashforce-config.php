<?php
	if(!defined('CASHFORCE_WEBAPP')) 
	{ 
		die('Desculpe, mas você não pode acessar este arquivo!'); 
	}
	

	$db['host'] = 'localhost';
	$db['port'] = '3306';
	$db['user'] = "root";
	$db['pass'] = '';
	$db['db'] = "cashforce_webapp";
	$config['url'] = "http://localhost/2020/API-PHP";
	$config['skin'] = "v1";
?>