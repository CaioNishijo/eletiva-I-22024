<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/compras.php';
    require_once '../funcoes/produtos.php';

    $listaProdutos = buscarProdutos();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = $_POST["data"];
        $produto_id = $_POST["produto_id"];
        $quantidade = $_POST["quantidade"];

        criarCompra($data, $produto_id, $quantidade);
        header("Location: compras.php");
    }
?>

<div class="container mt-5">
    <h2>Criar Nova Compra</h2>

    <form method="post">
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto</label>
            <select name="produto_id" id="produto_id" class="form-select" required>
                <?php foreach($listaProdutos as $produto): ?>
                    <option value=<?= $produto["id"]; ?>><?= $produto["nome"]; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Compra</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
