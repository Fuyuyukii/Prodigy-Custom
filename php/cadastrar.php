<?php
    include("sql_connect.php");
    $nome = $_GET["N"];
    $cpf = $_GET["C"];
    $email = $_GET["EM"];
    $senha = $_GET["S"];
    $senhaconfirma = $_GET["SC"];
    $telefone = $_GET["T"]; 

    $rua = $_GET["rua"];
    $numero = $_GET["numero"];
    $bairro = $_GET["bairro"];
    $cidade = $_GET["cidade"];
    $estado = $_GET["estado"];
    $cep = $_GET["cep"];


    if ($senha == $senhaconfirma) {
        try {
            $stmt = $pdo->prepare("INSERT INTO usuarios(nome, user_cpf, email, CEP, senha, telefone, Rua, Numero, Bairro, Cidade, Estado) VALUES (:nome, :cpf, :email, :endereco, :senha, :telefone
            , :Rua, :Numero, :Bairro, :Cidade, :Estado)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':endereco', $cep);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':telefone', $telefone);

            $stmt->bindParam(':Rua', $rua);
            $stmt->bindParam(':Numero', $numero);
            $stmt->bindParam(':Bairro', $bairro);
            $stmt->bindParam(':Cidade', $cidade);
            $stmt->bindParam(':Estado', $estado);
            $stmt->execute();
            echo "Data inserted successfully";
        } catch(PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
        }
    } else {
        echo "Error: Passwords do not match";
    }

    header("Location: ../");
?>