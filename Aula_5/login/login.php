<?php
// HEADER
include_once '../includes/header.php';
// CONEXÃO COM BD
require_once '../includes/conection.php';
?>

<!-- BODY -->

<body class="d-flex vw-100 vh-100 justify-content-center align-items-center bg-dark bg-gradient">
    <main class="w-40 h-50 p-5 bg-black rounded-3 d-flex justify-content-around align-items-center text-light flex-column ">
        <h1>
            Login
        </h1>
        <form action="" method="post">
            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="password">
            </div>
            <button type="submit">Entrar</button>
        </form>
    </main>

    <!-- FOOTER -->
    <?php
    include_once '../includes/footer.php';
    ?>