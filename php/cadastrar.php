<?php
    include("sql_connect.php");
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    $confirma_senha = $_POST["senhaconfirma"];
    $telefone = $_POST["telefone"];

    if ($senha == $confirma_senha)
    {
        $comando = $pdo->prepare("insert into usuarios(cpf, nome, Email, Endereco, Senha, Telefone) values('$nome', $cpf, '$email',
        '$endereco', '$senha', $telefone)");
        $resultado = $comando->execute();
    }
    else
    {
        echo("deu errado");
    }

    header("Location: cadastro.html");
?>