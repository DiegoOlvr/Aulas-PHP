<!-- HEADER -->
<?php 
include_once 'includes/head.php';
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
                <tr>
                    <td>00</td>
                    <td>Diego</td>
                    <td>Ramos</td>
                    <td>diegoramos@email.com</td>
                    <td>29</td>
                    <td><a href="">edit</a></td>
                    <td><a href="">del</a></td>
                </tr>
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