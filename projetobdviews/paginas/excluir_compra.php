<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/compras.php';

    $id = $_GET["id"];

    $compra = retornarCompraPorId($id);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        excluirCompra($id);
        header("Location: Compras.php");
    }
?>

<div class="container mt-5">
    <h2>Excluir Compra</h2>
    <p>Tem certeza de que deseja excluir a compra abaixo?</p>
    <ul>
        <li><strong>Data: <?= $compra["data_compra"]; ?></strong> </li>
        <li><strong>Produto: <?= $compra["nome"]; ?></strong> </li>
        <li><strong>Quantidade: <?= $compra["quantidade"]?></strong> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="compras.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
