<?php
    include("sql_connect.php");
    $essential_id = $_GET["essential_id"];
    $OP = $_GET["OP"];
    if($OP == 0){
        //pegando o path da imagem
        $stmt = $pdo->prepare("SELECT file_path FROM produtos_imagens where id_produto = :produto_id");
        $stmt->bindParam(':produto_id', $essential_id);
        $stmt->execute();

        while ($linhas = $stmt->fetch()){
            $path = $linhas["file_path"];
            }

        //excluindo ela do servidor

        @unlink($path);


        //deletando a imagem do produto
        $stmt = $pdo->prepare("DELETE FROM produtos_imagens WHERE id_produto = :produto_id");
        $stmt->bindParam(':produto_id', $essential_id);
        $stmt->execute();

        // deletando o produto ta tabela produtos
        $stmt = $pdo->prepare("DELETE FROM produtos WHERE id_produto = :produto_id");
        $stmt->bindParam(':produto_id', $essential_id);
        $stmt->execute();
    } else {
        echo($OP);
        //deletando a imagem do produto
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario");
        $stmt->bindParam(':id_usuario', $essential_id);
        $stmt->execute();
    }
    header("Location: ../tela-adm?op=". $OP);
?>