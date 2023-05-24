<?php
    include("sql_connect.php");
    $nome_produto = $_GET["npn"];
    $produto_preco = $_GET["npp"];
    $produto_categoria = $_GET["npc"];
    $produto_descricao = $_GET["npd"];
    $produto_info_tec = $_GET["npi"]; 

    
    // // INSERINDO OS DADOS BRUTOS
    // $stmt = $pdo->prepare("INSERT INTO produtos(nome, preco, categoria, descricao, info_tecnica)
    // VALUES (:nome_produto, :produto_preco, :produto_categoria, :produto_descricao, :produto_info_tec)");
    // $stmt->bindParam(':nome_produto', $nome_produto);
    // $stmt->bindParam(':produto_preco', $produto_preco);
    // $stmt->bindParam(':produto_categoria', $produto_categoria);
    // $stmt->bindParam(':produto_descricao', $produto_descricao);
    // $stmt->bindParam(':produto_info_tec', $produto_info_tec);
    // $stmt->execute();
    // echo "Data inserted successfully";

    //PEGANDO O ID DO PRODUTO
    $stm = $pdo->prepare("SELECT MAX(id_produto) AS max_id FROM produtos");
    $stm->execute();
    $row = $stm->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
        die('No data found');
    };
    $maxId = $row['max_id'];

    // INSERINDO AS IMAGENS
    $targetDir = "imgs/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($uploadOk == 0) {
        echo "The image was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["photo"]["name"]) . " has been uploaded.";
            $filePath = $targetFile;
            $stm = $pdo->prepare("INSERT INTO produtos_imagens (id_produto, file_path) VALUES (:id_produto, :filePath)");
            $stm->bindParam(':id_produto', $maxId);
            $stm->bindParam(':filePath', $filePath);
            $stm->execute();
        };
    };

    header("Location: ../tela-adm/index.html");
?>