<!-- HEADER -->
<?php
// Coneção com DB
require_once 'conection.php';

// Cabeçalho 
include_once 'includes/head.php';

if(isset($_GET['id'])){
    $id = mysqli_escape_string($mysqli, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $resultado = mysqli_query($mysqli, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>
<!-- BODY -->
<div>
    <div>
        <h1>
            Novo cliente
        </h1>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            
            <div>
                <input type="text" name="name" id="name" value="<?php echo $dados['nome']; ?>">
                <label for="name">Nome</label>
            </div>
            <div>
                <input type="text" name="lastname" id="lastname" value="<?php echo $dados['sobrenome']; ?>">
                <label for="lastname">Sobrenome</label>
            </div>
            <div>
                <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>">
                <label for="email">E-mail</label>
            </div>
            <div>
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
                <label for="idade">Idade</label>
            </div>
            <div>
                <input type="password" name="password" id="password" value="<?php echo $dados['senha']; ?>">
                <label for="password">Senha</label>
            </div>
            <button type="submit" name="btn-atualizar">Atualizar</button>
            <a href="index.php" type="submit">Listar clientes</a>

        </form>
    </div>
</div>

<!-- FOOTER -->
<?php 
include_once 'includes/footer.php';
?>