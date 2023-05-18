<?php
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];
    $produto_avaliacao  = $_GET["produto_avaliacao"];

    $stmt = $pdo->prepare("INSERT INTO produto_avaliacao VALUES (:produto_id, :produto_avaliacao)");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->bindParam(':produto_avaliacao', $produto_avaliacao);
    $stmt->execute();
?>