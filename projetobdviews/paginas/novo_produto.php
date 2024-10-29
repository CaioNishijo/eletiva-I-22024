<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/produtos.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = (float) $_POST['preco'];
        $estoque_minimo = (int) $_POST['estoque_minimo'];
        $categoria_id = (int) $_POST['categoria_id'];

        if (criarProduto($nome, $descricao, $preco, $estoque_minimo, $categoria_id)) {
            echo "<div class='alert alert-success'>Produto criado com sucesso!</div>";
            header("Location: produtos.php");
        } else {
            echo "<div class='alert alert-danger'>Erro ao criar produto.</div>";
        }
    }
?>

<div class="container mt-5">
    <h2>Criar Novo Produto</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="estoque_minimo" class="form-label">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" id="estoque_minimo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <input type="number" name="categoria_id" id="categoria_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Produto</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
