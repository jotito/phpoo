<?php
require 'conexao.php';
require 'modelo\Produto.php';
require 'repositorio\produtorepositorio.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];

    $produto = new Produto(0,
    $tipo,
    $nome,
    $descricao,
    $imagem,
    $preco,
);
$produtorepositorio = new produtorepositorio($conn);
$produtorepositorio->cadastrar($produto);
header("Location: cadastrar-produto-sucesso.php");
}

?>
