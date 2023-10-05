<?php 
include('conexao.php');

if ( isset($_POST['email']) || isset($_POST['password']) ){
    if (strlen($_POST['email']) == 0){
        echo "Preencha o seu e-mail!!!";
    }
    else if (strlen($_POST['password']) == 0){
        echo "Prencha a sua senha!!!";
    }
    else {
        $email = $msqli->real_escape_string($_POST['email']);
        $pw = $msqli->real_escape_string($_POST['password']);

        $sql_cod = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$pw'";

        $sql_query = $msqli->query($sql_cod) or die("Falha de execução!!". $mysql->error);

        $qtd = $sql_query-> num_rows;

        if ($qtd == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        }
        else {
            echo "Falha ao logar!!";
        }
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <main>
        <h1>
            Acesse a sua conta
        </h1>
        <form action="" method="post">
            <div>
                <label>E-mail</label>
                <input type="email" name="email" id="">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="password" id="">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>
        </form>
    </main>
    
</body>
</html>