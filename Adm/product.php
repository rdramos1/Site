<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nomeProduto = $_POST['titulo'];
$descript = $_POST['descricao'];
$valor = $_POST['valor'];
$link = $_POST['link'];

$html = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mika E-Books</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/icon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <img src="imagens/FortaleçaSeuAutocontrole.png" alt="">
        <h1 class="titulo">' . $nomeProduto . '</h1>
        <p class="descricao">' . $descript . '</p>
        <p class="preco">Preço: ' . $valor . '</p>
        <a href="' . $link . '" class="botao-comprar">Comprar</a>
    </div>
</body>
</html>';

// Cria o arquivo com o nome do produto e escreve o conteúdo HTML
file_put_contents($nomeProduto . '.html', $html);

echo 'Arquivo HTML (' . $nomeProduto . '.html) criado com sucesso!';

header('Location: ' . $nomeProduto . '.html');
exit;
?>

