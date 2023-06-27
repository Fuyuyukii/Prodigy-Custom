<?php
    session_start();
    include("sql_connect.php");

    //pegando o path da imagem
    $stmt = $pdo->prepare("SELECT * FROM usuarios INNER JOIN usuario_img on usuarios.id_usuario = usuario_img.id_usuario where id_usuario = :id_usuario");
    $stmt->bindParam(':id_usuario', $_SESSION["logado"]);
    $stmt->execute();

    while ($linhas = $stmt->fetch()){
        $user_name = $linhas["nome"];
        $user_gmail = $linhas["Email"];
        $user_telefone = $linhas["Telefone"];
        $user_cep = $linhas["CEP"];
    }

    $user_att = "{\"user_att\": 
        [
           {\"nome\":\"$user_name\", \"email\":\"$user_gmail\", \"telefone\":$user_telefone, \"CEP\":\"$user_cep\"}
        ]
      }";
    
   echo($user_att);
?>