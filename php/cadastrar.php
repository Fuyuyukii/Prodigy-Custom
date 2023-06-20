<?php
    include("sql_connect.php");
    $nome = $_GET["N"];
    $cpf = $_GET["C"];
    $email = $_GET["EM"];
    $endereco = $_GET["EN"];
    $senha = $_GET["S"];
    $senhaconfirma = $_GET["SC"];
    $telefone = $_GET["T"]; 

    if ($senha == $senhaconfirma) {
        try {
            $stmt = $pdo->prepare("INSERT INTO usuarios(nome, cpf, email, endereco, senha, telefone) VALUES (:nome, :cpf, :email, :endereco, :senha, :telefone)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->execute();
            echo "Data inserted successfully";
        } catch(PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }
    } else {
        echo "Error: Passwords do not match";
    }

    header("Location: ../tela-cadastro");
?>