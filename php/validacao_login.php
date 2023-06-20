<?php
    session_start();
    include("sql_connect.php");
    $gmail = $_GET["gmail"];
    $password = $_GET["password"];
    $comando = $pdo->prepare("SELECT usuarios.Email, usuarios.Senha, usuarios.id_usuario FROM usuarios WHERE Email = :gmail AND Senha = :password");
    $comando->bindParam(':gmail', $gmail);
    $comando->bindParam(':password', $password);
    $comando->execute();
    while ($linhas = $comando->fetch()){
        $id_usuario = $linhas["id_usuario"];
    }
    
    if ($comando->rowCount() > 0) {
        $_SESSION["logado"] = $id_usuario;
        echo "Email and password match";
        header("Location: ../venda-produto");
        exit(); // Important: Stop further execution after redirecting
    } else {
        echo "Email and password do not match";
    }
?>