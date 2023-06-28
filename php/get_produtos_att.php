<?php
    include("sql_connect.php");
    $produto_id = $_GET["produto_id"];

    $stmt = $pdo->prepare("SELECT * FROM produtos where id_produto = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();

    while ($linhas = $stmt->fetch()){
        $produto_nome = $linhas["nome"];
        $produto_preco = $linhas["preco"];
        $produto_descricao = $linhas["descricao"];
        $produto_infotec = $linhas["info_tecnica"];
    }

    $produto_att = "{\"produto_att\": 
        [
           {\"nome\":\"$produto_nome\", \"id\":\"$produto_id\", \"preco\":$produto_preco, \"descricao\":\"$produto_descricao\", \"informacoes_tecnicas\":\"$produto_infotec\"}
        ]
      }";
    
   echo($produto_att);
?>