<?php
if (!defined('CASHFORCE_WEBAPP'))
{
    die('Desculpe, mas você não pode acessar este arquivo!');
}
try
{
    $dbh = new PDO('mysql:host=' . $db['host'] . ':' . $db['port'] . ';dbname=' . $db['db'] . '', $db['user'], $db['pass']);
}
catch(PDOException $e)
{
    $err = array('status' => 'erro', 'dados' => 'Impossivel fazer conexão com o banco de dados.');
    echo json_encode($err); 
    die();
}
?>
