<?php
if (!defined('CASHFORCE_WEBAPP'))
{
    die('Desculpe, mas você não pode acessar este arquivo!');
}
class Html 
	{
		public static function page()
		{
			global $dbh, $config, $lang;
			if (defined('PHP_VERSION') && PHP_VERSION >= 5.6) 
			{
				true;
			} 
			else 
			{
				echo 'A versão do PHP é menor que a do PHP 5.6. A versão do PHP é '.PHP_VERSION.'';
				exit;
			}
				if(isset($_GET['url']))
				{
					$page = filter($_GET['url']);
					$allowed = array(); 
					foreach (new DirectoryIterator(Z . H . S) as $file) { 
						$file = explode('.php', $file);
						$allowed[] = $file[0];
					} 
					if($page)
					{
							$fileExists = Z . H . S ."/{$page}.php";
							if(file_exists($fileExists))
							{
								$content = in_array($page, $allowed) ? include(Z . H . S ."/{$page}.php") : '';
							} 
							else 
							{
								include Z . H . S .'/404.php'; 
							}
						
					} 
					else 
					{
						include Z . H . S .'/pages/index.php';
					}
				} 
				else 
				{
					include A . H . S . '/pages/index.php';
					header('Location: '.$config['url'].'/index');
				}
			
			if(loggedIn()){ 
				switch($page)
				{
					default:
					//Nothing
					break;
				}
			}
			if(!loggedIn()){ 
				switch($page)
				{
					case "index":				
					//
					break;
					default:
					// header('Location: '.$config['url'].'/index');
					break;
				}
			}
		}
		
		
	} 
?>	