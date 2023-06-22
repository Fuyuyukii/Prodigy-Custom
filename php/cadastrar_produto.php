<?php
    include("sql_connect.php");
    $nome_produto = $_POST["produto-nome-adicionar"];
    $produto_preco = $_POST["produto-preço-adicionar"];
    $produto_categoria = $_POST["produto-categoria-adicionar"];
    $produto_descricao = $_POST["produto-descricao-adicionar"];
    $produto_info_tec = $_POST["produto-tecinfo-adicionar"]; 
    $produto_id = $_POST["produto_id"]; 
    
    if ($produto_id != ""){
        // ATUALIZANDO O PRODUTO
        $stmt = $pdo->prepare("UPDATE produtos SET produtos.nome = :nome_produto, produtos.preco = :preco_produto,
        produtos.descricao = :descricao_produto, produtos.info_tecnica = :info_tecnica WHERE produtos.id_produto = :id_produto;");
        $stmt->bindParam(':nome_produto', $nome_produto);
        $stmt->bindParam(':preco_produto', $produto_preco);
        $stmt->bindParam(':descricao_produto', $produto_descricao);
        $stmt->bindParam(':info_tecnica', $produto_info_tec);
        $stmt->bindParam(':id_produto', $produto_id);
        $stmt->execute();
        echo "Data inserted successfully";
    } else {
        // INSERINDO OS DADOS BRUTOS
        $stmt = $pdo->prepare("INSERT INTO produtos(nome, preco, descricao, info_tecnica)
        VALUES (:nome_produto, :produto_preco, :produto_descricao, :produto_info_tec)");
        $stmt->bindParam(':nome_produto', $nome_produto);
        $stmt->bindParam(':produto_preco', $produto_preco);
        $stmt->bindParam(':produto_descricao', $produto_descricao);
        $stmt->bindParam(':produto_info_tec', $produto_info_tec);
        $stmt->execute();
        echo "Data inserted successfully";

        //PEGANDO O ID DO PRODUTO
        $stm = $pdo->prepare("SELECT MAX(id_produto) AS max_id FROM produtos");
        $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            die('No data found');
        };
        $produto_id = $row['max_id'];

        // INSERINDO IMAGEM
        if (!empty($_FILES['insereImagem']['name'])) {
            $nome_arquivo = $_FILES['insereImagem']['name'];
            $tipo = $_FILES['insereImagem']['type'];
            $nome_temporario = $_FILES['insereImagem']['tmp_name'];
            $tamanho = $_FILES['insereImagem']['size'];
            $erros = [];

            $tamanho_maximo = 1024 * 1024 * 5;
            if ($tamanho > $tamanho_maximo) {
                $erros[] = "Seu arquivo excede o tamanho máximo<br>";
            }

            $arquivos_permetidos = ["png", "jpg", "jpeg"];
            $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);
            if ( !in_array($extensao, $arquivos_permetidos)){
                $erros[] = "extensão do arquivo permitida.<br>";
            }

            $types_permitidos = ["image/png", "image/jpg", "image/jpeg"];
            if ( !in_array($tipo, $types_permitidos)){
                $erros[] = "tipo de arquivo não permitido.<br>";
            }

            if ( !empty($erros)) {
                foreach ($erros as $erro) {
                    echo $erro;
                } 
            } else {
                $root_path = "../imgs/";
                if (move_uploaded_file($nome_temporario, $root_path . $nome_arquivo)) {
                    echo "upload feito.<br>";
                } else {
                    echo "erro no upload.<br>";
                }
            }

            
        }
        $img_file_path = $root_path . $nome_arquivo;
        echo "$produto_id<br>";
        echo "$img_file_path<br>";
        $stmt = $pdo->prepare("INSERT INTO produtos_imagens(id_produto, file_path)
        VALUES (:produto_id, :file_path)");
        $stmt->bindParam(':produto_id', $produto_id);
        $stmt->bindParam(':file_path', $img_file_path);
        $stmt->execute();
        echo "produto_imagem adicionados<br>";
    }


    header("Location: ../tela-adm");
?>