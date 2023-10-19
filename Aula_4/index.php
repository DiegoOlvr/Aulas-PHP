<!-- HEADER -->
<?php

// Sessão 
session_start();
if (isset($_SESSION['status'])) {
    echo $_SESSION['status'];
}
session_unset();

include_once 'includes/head.php';

require_once 'conection.php';
?>

<!-- BODY -->
<div>
    <div>
        <h1>
            CLIENTES
        </h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SOBRENOME</th>
                    <th>E-MAIL</th>
                    <th>IDADE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($mysqli, $sql);
                while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <td> <?php echo $dados['id']; ?> </td>
                        <td> <?php echo $dados['nome']; ?></td>
                        <td> <?php echo $dados['sobrenome']; ?></td>
                        <td> <?php echo $dados['email']; ?></td>
                        <td> <?php echo $dados['idade']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>">edit</a></td>
                        <td><a href="">del</a></td>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deletar cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja DELETAR esse cliente???
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Sim!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php">Adicionar cliente</a>

    </div>
</div>


<!-- FOOTER -->
<?php
include_once 'includes/footer.php';
?>