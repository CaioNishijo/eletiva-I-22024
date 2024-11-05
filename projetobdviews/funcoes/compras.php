<?php 
declare(strict_types = 1);
require_once '../config/bancodedados.php';

function criarCompra(string $data, int $produto_id, int $quantidade):bool{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO compra (data_compra, produto_id, quantidade) VALUES (?, ?, ?)");
    return $statement->execute([$data, $produto_id, $quantidade]);
}

function retornarCompras(){
    global $pdo;
    $statement = $pdo->query("SELECT c.*, p.nome FROM compra c JOIN produto p ON p.id = c.produto_id;");
    return $statement ?: null;
}

function retornarCompraPorId(int $id) {
    global $pdo;
    // Corrigido: usamos 'c.id' no WHERE para refletir o alias da tabela 'compra'
    $statement = $pdo->prepare("SELECT c.*, p.nome FROM compra c JOIN produto p ON p.id = c.produto_id WHERE c.id = ?");
    $statement->execute([$id]);

    // Busca o resultado da consulta
    $compra = $statement->fetch(PDO::FETCH_ASSOC);

    // Se não houver nenhum resultado, retornamos null
    return $compra ?: null;
}

function excluirCompra(int $id):bool{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM compra WHERE id = ?");
    return $statement->execute([$id]);
}
?>