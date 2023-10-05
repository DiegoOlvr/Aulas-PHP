<?php 
require_once 'conection.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($mysqli, $_POST['name']);
    $sobrenome = mysqli_escape_string($mysqli, $_POST['lastname']);
    $email = mysqli_escape_string($mysqli, $_POST['email']);
    $idade = mysqli_escape_string($mysqli, $_POST['idade']);
    $senha = mysqli_escape_string($mysqli, $_POST['password']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade, senha) VALUES ('$nome', '$sobrenome', '$email', '$idade', '$senha')";

    if(mysqli_query($mysqli, $sql)){
        header('Location: index.php?sucesso');
    }else {
        header('Location: index.php?fail');
    }
}
?>