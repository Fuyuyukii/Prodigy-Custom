<?php
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];

    //pegando o path da imagem
    $stmt = $pdo->prepare("SELECT file_path FROM produtos_imagens where id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();

    $path = $linhas["file_path"];

    //excluindo ela do servidor

    @unlink($path);


    //deletando a imagem do produto
    $stmt = $pdo->prepare("DELETE FROM produtos_imagens WHERE id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();

    // deletando o produto ta tabela produtos
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();
    header("Location: ../tela-adm");
?>