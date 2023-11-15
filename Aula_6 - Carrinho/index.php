<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "carrinho_compra");

if (isset($_POST['add_to_cart'])){
    if (isset($_SESSION['carrinho'])){
        $session_array_id = array_column($_SESSION['carrinho'], "id");
    }
    else{
        $session_array = array(
            'id' => $_GET['id'],
            "nome" => $_POST['nome'],
            "preco" => $_POST['preco'],
            "quantidade" => $_POST['quantidade']
        );
        $_SESSION['carrinho'][] = $session_array;
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="row">

                            <h2 class="text-center">
                                Carrinho de compras
                            </h2>
                            <?php
                            $query = "SELECT * FROM itens";
                            $resultado = mysqli_query($connect, $query);

                            while ($row = mysqli_fetch_array($resultado)) {
                            ?>
                                <div class="col-md-4">
                                    <form method="post" action="index.php?id=<?= $row['id'] ?>">
                                        <img src="img/<?= $row['img'] ?>" style='height: 150px;'>
                                        <h5 class="text-center"> <?= $row['nome']; ?></h5>
                                        <h5 class="text-center"> <?= number_format($row['preco'], 2); ?></h5>
                                        <input type="hidden" name="nome" value="<?= $row['nome'] ?>">
                                        <input type="hidden" name="preco" value="<?= $row['preco'] ?>">
                                        <input type="number" name="quantidade" value="1" class="form-control">
                                        <input type="submit" name="add_to_cart" class="btn btn-warning w-100 my-2" value="Adiconar">
                                    </form>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">
                        Itens selecionados

                        <?php 
                            var_dump($_SESSION['carrinho']);
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>