<?php
if (!defined('CASHFORCE_WEBAPP'))
{
    die('Desculpe, mas você não pode acessar este arquivo!');
}

    session_start();
	ob_start();
	define('Z', PROJECT_ROOT_PATH.'/');
	define('A', Z . 'system/');
	define('B', 'app/');
	define('C', 'classes/');
	define('E', 'languages/');
	define('G', 'content/');
	define('H', 'templates/');
	define('I', 'maintenance/');
	define('J', Z . 'adminpan/');
    define('K', 'plugins/');

	
    require_once A . '/cashforce-config.php';
	define('S', $config['skin']);
	require_once A . B . C . '/functions.php';
	require_once A . B . C . '/class.html.php';
	require_once A . B . C . '/class.db.php';

    ?>
	
