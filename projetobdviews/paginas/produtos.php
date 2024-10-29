<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
    require_once '../funcoes/produtos.php';

    $produtos = buscarProdutos();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Produtos</h2>
    <a href="novo_produto.php" class="btn btn-success mb-3">Novo Produto</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque Mínimo</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $produto['id']; ?></td>
                <td><?= $produto['descricao']; ?></td>
                <td><?= $produto['preco']; ?></td>
                <td><?= $produto['estoque_minimo']; ?></td>
                <td><?= $produto['categoria_nome']; ?></td>
                <td>
                    <a href="editar_produto.php?id=<?= $produto['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="excluir_produto.php?id=<?= $produto['id']; ?>" class="btn btn-danger btn-sm">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
