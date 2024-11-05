<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
    require_once '../funcoes/compras.php';    

    $listaCompras = retornarCompras();
?>

<div class="container mt-5">
    <h2>Gerenciamento de Compras</h2>
    <a href="nova_compra.php" class="btn btn-success mb-3">Nova Compra</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaCompras as $compra): ?>
                <tr>
                    <td><?= $compra["id"]?></td>
                    <td><?= $compra["data_compra"]?></td>
                    <td><?= $compra["nome"]?></td>
                    <td><?= $compra["quantidade"]?></td>
                    <td>
                        <a href="excluir_compra.php?id=<?= $compra["id"]?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>   
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
