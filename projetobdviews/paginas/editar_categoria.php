
<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
    require_once '../funcoes/categorias.php';

    if (!isset($_GET['id'])) {
        echo "<div class='alert alert-danger'>ID do produto não fornecido.</div>";
        exit;
    }

    $id = $_GET["id"];

    $categoria = retornaCategoriaPorId($id);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];

        atualizarCategoria($id, $nome);
        header("Location: categorias.php");
    }
?>

<div class="container mt-5">
    <h2>Editar Categoria</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value=<?= $categoria["nome"]; ?> required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Categoria</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
