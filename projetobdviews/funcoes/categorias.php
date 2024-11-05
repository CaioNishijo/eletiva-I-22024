<?php 
declare(strict_types = 1);
require_once '../config/bancodedados.php';


function criarCategoria(string $nome):bool{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO categoria (nome) VALUES (?)");
    return $statement->execute([$nome]);
}

function buscarCategorias(): array{
    global $pdo;
    $statement = $pdo->query("SELECT * FROM categoria");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function retornaCategoriaPorId(int $id): ?array{
    global $pdo;    
    $statement = $pdo->prepare("SELECT * FROM categoria WHERE id = ?");
    $statement->execute([$id]);
    $categoria = $statement->fetch(PDO::FETCH_ASSOC);
    return $categoria ? $categoria : null;
}

function atualizarCategoria(int $id, string $nome) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE categoria SET nome = :nome WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nome);
    return $stmt->execute();
}

function excluirCategoria(int $id):bool{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM categoria WHERE id = ?");
    return $statement->execute([$id]);
}
?>