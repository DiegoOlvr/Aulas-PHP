<?php 

$host = 'localhost';
$database = 'login';
$usuario = 'root';
$senha = '';

$msqli = new mysqli($host, $usuario, $senha, $database);

if ($msqli->error)
{
    die("Falha ao conectar ao banco de dados: " . $msqli->error);
}

?>