<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/categorias.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];

        if (criarCategoria($nome)) {
            echo "<div class='alert alert-success'>Produto criado com sucesso!</div>";
            header("Location: categorias.php");
        } else {
            echo "<div class='alert alert-danger'>Erro ao criar produto.</div>";
        }
    }
?>

<div class="container mt-5">
    <h2>Criar Nova Categoria</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Categoria</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
