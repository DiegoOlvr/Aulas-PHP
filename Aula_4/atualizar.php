<?php
// Sessão
session_start();
// Conexão com DB 
require_once 'conection.php';

if(isset($_POST['btn-atualizar'])){
    $id = mysqli_escape_string($mysqli, $_POST['id']);
    $nome = mysqli_escape_string($mysqli, $_POST['name']);
    $sobrenome = mysqli_escape_string($mysqli, $_POST['lastname']);
    $email = mysqli_escape_string($mysqli, $_POST['email']);
    $idade = mysqli_escape_string($mysqli, $_POST['idade']);
    $senha = mysqli_escape_string($mysqli, $_POST['password']);

    $sql = "UPDATE clientes SET nome = '$nome' , sobrenome = '$sobrenome', email = '$email', idade = '$idade', senha = '$senha' WHERE id = $id";

    if(mysqli_query($mysqli, $sql)){
        $_SESSION['status'] = "Atualizado com sucesso!";
        header('Location: index.php');
    }else {
        $_SESSION['status'] = "Falha ao atualizar!";
        header('Location: index.php');
    }
}
?>