<?php 
require_once '../funcoes/produtos.php';

if (!isset($_GET['id'])) {
    echo "<div class='alert alert-danger'>ID do produto não fornecido.</div>";
    exit;
}

$id = intval($_GET['id']);
$produto = buscarProdutoPorId($id);

if (!$produto) {
    echo "<div class='alert alert-danger'>Produto não encontrado.</div>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = (float) $_POST['preco'];
    $estoque_minimo = (int) $_POST['estoque_minimo'];
    $categoria_id = (int) $_POST['categoria_id'];

    if (atualizarProduto($id, $nome, $descricao, $preco, $estoque_minimo, $categoria_id)) {
        echo "<div class='alert alert-success'>Produto atualizado com sucesso!</div>";
        header("Location: produtos.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Erro ao atualizar produto.</div>";
    }
}

require_once 'cabecalho.php'; 
require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Editar Produto</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?=$produto['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required><?=$produto['descricao']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" value="<?= $produto['preco']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" id="estoque_minimo" class="form-control" value="<?= $produto['estoque_minimo']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <input type="number" name="categoria_id" id="categoria_id" class="form-control" value="<?= $produto['categoria_id']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
