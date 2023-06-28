<?php
    session_start();
    include("sql_connect.php");
    $id_produto = $_GET["produto_id"];

    //pegando o path da imagem
    $stmt = $pdo->prepare("INSERT INTO usuario_compras VALUES (:id_usuario, :id_produto)");
    $stmt->bindParam(':id_produto', $id_produto);
    $stmt->bindParam(':id_usuario', $_SESSION["logado"]);
    $stmt->execute();

    header("Location: ../tela-carrinho");
?>