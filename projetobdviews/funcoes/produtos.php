<?php 
declare(strict_types = 1);
require_once '../config/bancodedados.php';

function buscarProdutos() {
    global $pdo;
    $stmt = $pdo->query("
        SELECT p.id, p.nome, p.descricao, p.preco, p.estoque_minimo, p.categoria_id, c.nome AS categoria_nome
        FROM produto p
        JOIN categoria c ON p.categoria_id = c.id
    ");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscarProdutoPorId(int $id) {
    global $pdo;
    $stmt = $pdo->prepare("
        SELECT p.id, p.nome, p.descricao, p.preco, p.estoque_minimo, p.categoria_id, c.nome AS categoria_nome
        FROM produto p
        JOIN categoria c ON p.categoria_id = c.id
        WHERE p.id = :id
    ");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function criarProduto(string $nome, string $descricao, float $preco, int $estoqueMinimo, int $categoriaId) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO produto (nome, descricao, preco, estoque_minimo, categoria_id) VALUES (:nome, :descricao, :preco, :estoque_minimo, :categoria_id)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':estoque_minimo', $estoqueMinimo);
    $stmt->bindParam(':categoria_id', $categoriaId);
    return $stmt->execute();
}

function atualizarProduto(int $id, string $nome, string $descricao, float $preco, int $estoqueMinimo, int $categoriaId) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produto SET nome = :nome, descricao = :descricao, preco = :preco, estoque_minimo = :estoque_minimo, categoria_id = :categoria_id WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':estoque_minimo', $estoqueMinimo);
    $stmt->bindParam(':categoria_id', $categoriaId);
    return $stmt->execute();
}

function deletarProduto(int $id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produto WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
?>