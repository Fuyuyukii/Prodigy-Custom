<?php
    include("sql_connect.php");
    $gmail = $_GET["gmail"];
    $password = $_GET["password"];
    $comando = $pdo->prepare("SELECT usuarios.Email, usuarios.Senha FROM usuarios WHERE Email = :gmail AND Senha = :password");
    $comando->bindParam(':gmail', $gmail);
    $comando->bindParam(':password', $password);
    $comando->execute();
    
    if ($comando->rowCount() > 0) {
        echo "Email and password match";
        header("Location: ../venda-produto/tela_venda.html");
        exit(); // Important: Stop further execution after redirecting
    } else {
        echo "Email and password do not match";
    }
?>