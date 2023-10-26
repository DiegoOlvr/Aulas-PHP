<?php 
$host = 'localhost';
$db = 'mercadinho';
$user = 'root';
$password = '';

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli-> error){
    die('Falha ao tentar acessar o banco de dados '. $mysqli->error);
}
