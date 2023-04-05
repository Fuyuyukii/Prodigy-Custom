<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email e senha</title>
    <style>
        .senha{
            color:#d081f4;
        }
       
    </style>
</head>
<body>
    
    <?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        echo("<div class='senha'> Email </div> ");
        echo($email . "<br><br>");
        echo("<div class='senha'>Senha </div> ");
        echo($senha);
    ?>

</body>
</html>