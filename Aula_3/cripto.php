<?php 
    $senha = '3197@Oa';
    $nova_senha = base64_encode($senha);
    $senha_decode = base64_decode($nova_senha);
    echo "Senha: ".$senha."<br>";
    echo "Base 64: ".$nova_senha."<br>";
    echo "Senha decodificada: ".$senha_decode."<br>";
    echo "Md5: ".md5($senha)."<br>";
    echo "Sha1: ".sha1($senha)."<br>";
    echo "<hr>";
    echo "Senha mais segura"."<br>";
    $senha_segura = password_hash($senha, PASSWORD_DEFAULT);
    echo $senha_segura;

    $senha_db = '$2y$10$wq2WZq8/BbNU0aniUH780uECBlc9dZB9mBezV5bHJXH7YDqi24gGe';
    echo "<hr>";
    if (password_verify($senha, $senha_db)){
        echo "Senha válida!";
    }else {
        echo "Senha inválida!";
    }
?>