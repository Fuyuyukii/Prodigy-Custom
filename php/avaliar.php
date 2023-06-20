<?php
    session_start();
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];
    $produto_avaliacao  = $_GET["produto_avaliacao"];
    $usuario_id = $_SESSION["logado"];

    $stmt = $pdo->prepare("INSERT INTO produto_avaliacao VALUES (:usuario_id, :produto_id, :produto_avaliacao)");
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->bindParam(':produto_avaliacao', $produto_avaliacao);
    $stmt->execute();
    header("Location: ../visualiza-produto");
?>