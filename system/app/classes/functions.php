<?php
if (!defined('API_WEBAPP'))
{
    die('Desculpe, mas você não pode acessar este arquivo!');
}

function loggedIn()
{
    if (isset($_SESSION['id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}
function filter($data)
{
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
function checkCloudflare()
	{
		if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) 
		{
			$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
			return $_SERVER['REMOTE_ADDR'];
		}
		else
		{
			return $_SERVER['REMOTE_ADDR'];
		}
	}
?>
