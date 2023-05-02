<?php
    include("sql_connect.php");
    $nome_produto = $_GET["npn"];
    $produto_preco = $_GET["npp"];
    $produto_categoria = $_GET["npc"];
    $produto_descricao = $_GET["npd"];
    $produto_info_tec = $_GET["npi"]; 

    $stmt = $pdo->prepare("INSERT INTO produtos(nome, preco, categoria, descricao, info_tecnica)
    VALUES (:nome_produto, :produto_preco, :produto_categoria, :produto_descricao, :produto_info_tec)");
    $stmt->bindParam(':nome_produto', $nome_produto);
    $stmt->bindParam(':produto_preco', $produto_preco);
    $stmt->bindParam(':produto_categoria', $produto_categoria);
    $stmt->bindParam(':produto_descricao', $produto_descricao);
    $stmt->bindParam(':produto_info_tec', $produto_info_tec);
    $stmt->execute();
    echo "Data inserted successfully";

    header("Location: ../tela-adm/index.html");
?>