<?php 
require_once 'cabecalho.php'; 
require_once 'navbar.php';    
require_once '../funcoes/produtos.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $id = intval($_POST['id']);
        if (deletarProduto($id)) {
            header('Location: produtos.php');
            exit();
        } else {
            $erro = "Erro ao excluir o produto!";
        }
    } catch (Exception $e) {
        $erro = "Erro: " . $e->getMessage();
    }
} else {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $produto = buscarProdutoPorId($id);
        if ($produto == null) {
            header('Location: produtos.php');
            exit();
        }
    } else {
        header('Location: produtos.php');
        exit();
    }
}
?>

<div class="container mt-5">
    <h2>Excluir Produto</h2>
    
    <p>Tem certeza de que deseja excluir o produto abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $produto['nome']; ?></li>
        <li><strong>Descrição:</strong> <?= $produto['descricao']; ?></li>
        <li><strong>Categoria:</strong> <?= $produto['categoria_nome']; ?></li>
        <li><strong>Preço:</strong> <?= $produto['preco']; ?></li>
        <li><strong>Estoque Mínimo:</strong> <?= $produto['estoque_minimo']; ?></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $produto['id']; ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="produtos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
