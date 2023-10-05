<?php 

$host = 'localhost';
$db = 'login2';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($host, $usuario, $senha, $db);

if ($mysqli -> error){
    die("Falha ao conectar com o banco de dados". $mysqli->error);
}


?>