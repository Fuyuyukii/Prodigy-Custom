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
    $stmt = $pdo->prepare("DELETE FROM usuario_carrinho WHERE id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();
?>