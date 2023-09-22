<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>INFORMAÇÕES</h1>
    </header>
    <?php
    $email = $_POST["email"] ?? "Sem e-mail";
    $senha = $_POST["pass"] ?? "1234";
    const NOME = "Diego";
    echo "<p>O seu email é $email  e a sua senha é $senha<br>nome: ".NOME;
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para Formulário</a></p>
</body>

</html>