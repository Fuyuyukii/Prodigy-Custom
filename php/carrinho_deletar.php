<?php
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];

    $stmt = $pdo->prepare("DELETE FROM usuario_carrinho WHERE id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();
?>