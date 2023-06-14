<?php
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];
    $produto_avaliacao  = $_GET["produto_avaliacao"];
    $cpf_usuario  = $_GET["cpf_usuario"];

    $stmt = $pdo->prepare("INSERT INTO produto_avaliacao VALUES (:cpf_usuario, :produto_id, :produto_avaliacao)");
    $stmt->bindParam(':cpf_usuario', $cpf_usuario);
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->bindParam(':produto_avaliacao', $produto_avaliacao);
    $stmt->execute();

    header("Location: ../visualiza-produto/index.php");
?>