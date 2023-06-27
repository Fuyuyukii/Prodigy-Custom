<?php
    session_start();
    $selected_option = 0;
    if(isset($_GET["op"])){
        $selected_option = $_GET["op"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodigy Custom</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400;500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</head>

<body style="overflow-x:hidden">
    <header>
        <nav class="nav navbar">
            <a href="../venda-produto/index.php"><img class="logo" src="fotologo.png" alt="imagem da logo"></a>
            <div class="icones">
                <a href="../tela-carrinho/index.php">
                    <svg style="cursor:pointer" width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.61132 13C9.24662 13 8.91085 13.1985 8.7351 13.5181C8.36855 14.1845 8.85071 15 9.61131 15H18.92C19.4723 15 19.92 15.4477 19.92 16C19.92 16.5523 19.4723 17 18.92 17H17.93H7.92999H7.92004C6.40004 17 5.44004 15.37 6.17004 14.03L7.02318 12.488C7.33509 11.9243 7.35632 11.2448 7.08022 10.6627L4.25211 4.70011C4.04931 4.27254 3.6184 4 3.14518 4H2.92004C2.36776 4 1.92004 3.55228 1.92004 3C1.92004 2.44772 2.36776 2 2.92004 2H3.92398C4.69708 2 5.40095 2.44557 5.7317 3.14435L5.90228 3.50471C5.93443 3.5016 5.96703 3.5 6 3.5H21C21.5523 3.5 22 3.94772 22 4.5C22 4.77321 21.8904 5.02082 21.7129 5.20131C21.7448 5.41025 21.7106 5.63097 21.6008 5.83041L18.22 11.97C17.88 12.59 17.22 13 16.47 13H9.61132ZM7.92999 17C9.03456 17 9.92999 17.8954 9.92999 19C9.92999 20.1046 9.03456 21 7.92999 21C6.82542 21 5.92999 20.1046 5.92999 19C5.92999 17.8954 6.82542 17 7.92999 17ZM17.93 17C16.8254 17 15.93 17.8954 15.93 19C15.93 20.1046 16.8254 21 17.93 21C19.0346 21 19.93 20.1046 19.93 19C19.93 17.8954 19.0346 17 17.93 17ZM19.5108 5.5L17.0408 9.96767C16.6886 10.6046 16.0183 11 15.2905 11H10.7161C9.94301 11 9.23914 10.5544 8.90839 9.85565L6.84671 5.5H19.5108Z"
                                fill="#000000"></path>
                            <path
                                d="M7.92999 20C8.48228 20 8.92999 19.5523 8.92999 19C8.92999 18.4477 8.48228 18 7.92999 18C7.37771 18 6.92999 18.4477 6.92999 19C6.92999 19.5523 7.37771 20 7.92999 20Z"
                                fill="#000000"></path>
                            <path
                                d="M18.93 19C18.93 19.5523 18.4823 20 17.93 20C17.3777 20 16.93 19.5523 16.93 19C16.93 18.4477 17.3777 18 17.93 18C18.4823 18 18.93 18.4477 18.93 19Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                </a>
                <div class="dropdown drop-msg">
                    <svg style="cursor:pointer" data-bs-toggle="dropdown" fill="#000000" width="45px" height="45px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="Layer 2"> <g data-name="bell"> <rect width="24" height="24" opacity="0"></rect> <path d="M20.52 15.21l-1.8-1.81V8.94a6.86 6.86 0 0 0-5.82-6.88 6.74 6.74 0 0 0-7.62 6.67v4.67l-1.8 1.81A1.64 1.64 0 0 0 4.64 18H8v.34A3.84 3.84 0 0 0 12 22a3.84 3.84 0 0 0 4-3.66V18h3.36a1.64 1.64 0 0 0 1.16-2.79zM14 18.34A1.88 1.88 0 0 1 12 20a1.88 1.88 0 0 1-2-1.66V18h4zM5.51 16l1.18-1.18a2 2 0 0 0 .59-1.42V8.73A4.73 4.73 0 0 1 8.9 5.17 4.67 4.67 0 0 1 12.64 4a4.86 4.86 0 0 1 4.08 4.9v4.5a2 2 0 0 0 .58 1.42L18.49 16z"></path> </g> </g> </g></svg>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" class="dropdown-item">
                                <p>Um item da sua lista de desejos esta em promoção! </p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown drop-minhaconta">
                    <svg style="cursor:pointer" data-bs-toggle="dropdown" width="45px" height="45px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 0h48v48H0z" fill="none"></path> <g id="Shopicon"> <path d="M31.278,25.525C34.144,23.332,36,19.887,36,16c0-6.627-5.373-12-12-12c-6.627,0-12,5.373-12,12 c0,3.887,1.856,7.332,4.722,9.525C9.84,28.531,5,35.665,5,44h38C43,35.665,38.16,28.531,31.278,25.525z M16,16c0-4.411,3.589-8,8-8 s8,3.589,8,8c0,4.411-3.589,8-8,8S16,20.411,16,16z M24,28c6.977,0,12.856,5.107,14.525,12H9.475C11.144,33.107,17.023,28,24,28z"></path> </g> </g></svg>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a href="../tela-minhaconta/index.html"
                                class="dropdown-item d-flex align-items-center mt-2 mb-2 ps-3 gap-2">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <rect width="24" height="24"></rect>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8Z"
                                            fill="#878787"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.43094 16.9025C7.05587 16.2213 9.2233 16 12 16C14.771 16 16.9351 16.2204 18.5586 16.8981C20.3012 17.6255 21.3708 18.8613 21.941 20.6587C22.1528 21.3267 21.6518 22 20.9592 22H3.03459C2.34482 22 1.84679 21.3297 2.0569 20.6654C2.62537 18.8681 3.69119 17.6318 5.43094 16.9025Z"
                                            fill="#878787"></path>
                                    </g>
                                </svg>
                                <p style="margin:0">Minha Conta</p>
                            </a>
                        </li>
                        <li>
                            <a href="../tela-pedidos/" class="dropdown-item d-flex align-items-center mt-2 mb-2 ps-3 gap-2">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.45925 6C4.02505 6 2.1552 8.15595 2.49945 10.5657L3.51965 17.7071C3.87155 20.1704 5.98115 22 8.4694 22H15.531C18.0193 22 20.1289 20.1704 20.4808 17.7071L21.501 10.5657C21.8452 8.15595 19.9754 6 17.5412 6H6.45925Z"
                                            fill="#878787"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.00016 4.76363C7.84716 3.06962 9.57838 2 11.4721 2H12.5279C14.4218 2 16.1531 3.07003 17 4.76396L17.8944 6.55279C18.1414 7.04677 17.9412 7.64744 17.4472 7.89443C16.9532 8.14142 16.3526 7.94119 16.1056 7.44721L15.2112 5.65838C14.703 4.64202 13.6642 4 12.5279 4H11.4721C10.3357 4 9.29715 4.64179 8.78901 5.65805L7.89443 7.44721C7.64744 7.94119 7.04677 8.14142 6.55279 7.89443C6.05881 7.64744 5.85859 7.04676 6.10558 6.55279L7.00016 4.76363Z"
                                            fill="#878787"></path>
                                    </g>
                                </svg>
                                <p style="margin:0">Seus Pedidos</p>
                            </a>
                        </li>
                        <li>
                            <a href="../tela-favoritos/index.html"
                                class="dropdown-item d-flex align-items-center mt-2 mb-2 ps-3 gap-2">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M12.7692 6.70483C9.53846 2.01902 4 3.90245 4 8.68256C4 13.4627 13.2308 20 13.2308 20C13.2308 20 22 13.2003 22 8.68256C22 4.16479 16.9231 2.01903 13.6923 6.70483L13.2308 7.0791L12.7692 6.70483Z"
                                            fill="#858585" stroke="#858585" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p style="margin:0">Favoritos</p>
                            </a>
                        </li>
                        <li>
                            <?php
                            include("../php/sql_connect.php");
                            $comando = $pdo->prepare("select * from usuarios where usuarios.id_usuario = :id_usuario");
                            $comando->bindParam(':id_usuario', $_SESSION["logado"]);
                            $comando->execute();
                            while ($linhas = $comando->fetch()){
                                $adm_verify = $linhas["adm"];
                                if ($adm_verify == 1){
                                    echo(
                                        "<a href='../tela-adm/index.php'
                                        class='dropdown-item d-flex align-items-center mt-2 mb-2 ps-3 gap-2'>
                                        <svg width='20px' height='20px' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' fill='none'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path stroke='#535358' stroke-linejoin='round' stroke-width='2' d='M13.905 3.379A.5.5 0 0114.39 3h3.22a.5.5 0 01.485.379l.689 2.757a.515.515 0 00.341.362c.383.126.755.274 1.115.443a.515.515 0 00.449-.003l2.767-1.383a.5.5 0 01.577.093l2.319 2.319a.5.5 0 01.093.577l-1.383 2.767a.515.515 0 00-.003.449c.127.271.243.549.346.833.053.148.17.265.319.315l2.934.978a.5.5 0 01.342.474v3.28a.5.5 0 01-.342.474l-2.934.978a.515.515 0 00-.32.315 9.937 9.937 0 01-.345.833.515.515 0 00.003.449l1.383 2.767a.5.5 0 01-.093.577l-2.319 2.319a.5.5 0 01-.577.093l-2.767-1.383a.515.515 0 00-.449-.003c-.271.127-.549.243-.833.346a.515.515 0 00-.315.319l-.978 2.934a.5.5 0 01-.474.342h-3.28a.5.5 0 01-.474-.342l-.978-2.934a.515.515 0 00-.315-.32 9.95 9.95 0 01-1.101-.475.515.515 0 00-.498.014l-2.437 1.463a.5.5 0 01-.611-.075l-2.277-2.277a.5.5 0 01-.075-.61l1.463-2.438a.515.515 0 00.014-.498 9.938 9.938 0 01-.573-1.383.515.515 0 00-.362-.341l-2.757-.69A.5.5 0 013 17.61v-3.22a.5.5 0 01.379-.485l2.757-.689a.515.515 0 00.362-.341c.157-.478.35-.94.573-1.383a.515.515 0 00-.014-.498L5.594 8.557a.5.5 0 01.075-.611l2.277-2.277a.5.5 0 01.61-.075l2.438 1.463c.152.091.34.094.498.014a9.938 9.938 0 011.382-.573.515.515 0 00.342-.362l.69-2.757z'></path> <circle cx='16' cy='16' r='5' stroke='#535358' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'></circle> </g></svg>
                                        <p style='margin:0'>Administração</p>
                                        </a>"
                                        );
                                }
                            }
                            ?>
                        </li>
                        <li>
                            <a href="../index.html"
                                class="dropdown-item d-flex align-items-center mt-2 mb-2 ps-3 gap-2">
                                <svg fill="#828282" width="20px" height="20px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#828282">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g data-name="Layer 2">
                                            <g data-name="log-out">
                                                <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0">
                                                </rect>
                                                <path
                                                    d="M7 6a1 1 0 0 0 0-2H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h2a1 1 0 0 0 0-2H6V6z">
                                                </path>
                                                <path
                                                    d="M20.82 11.42l-2.82-4a1 1 0 0 0-1.39-.24 1 1 0 0 0-.24 1.4L18.09 11H10a1 1 0 0 0 0 2h8l-1.8 2.4a1 1 0 0 0 .2 1.4 1 1 0 0 0 .6.2 1 1 0 0 0 .8-.4l3-4a1 1 0 0 0 .02-1.18z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p style="margin:0">Sair</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="col-md-12">
            <div class="d-flex mx-5" style="margin-top: 120px">
                <!-- Lado esquerda da tela -->
                <div class="col-md-12">
                    <div class="card carrinho">
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <div class="col-md-12 d-flex justify-content-between ps-2">
                                    <select onchange="md()" class="form-select" id="selectTipo" style="width:200px">
                                        <option <?php if($selected_option == 0){echo("selected");} ?>>Produtos</option>
                                        <option <?php if($selected_option == 1){echo("selected");} ?>>Usuários</option>
                                    </select>
                                    <button class="button-primario" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter"
                                        style="padding:0;width:36px !important;height: 36px !important;"><svg
                                            fill="#fff" width="32px" height="32px" viewBox="0 0 32 32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M9,17h6v6a1,1,0,0,0,2,0V17h6a1,1,0,0,0,0-2H17V9a1,1,0,0,0-2,0v6H9a1,1,0,0,0,0,2Z">
                                                </path>
                                            </g>
                                        </svg></button>
                                </div>
                                <hr>
                                <?php
                                include("../php/sql_connect.php");
                                if($selected_option == 0){
                                    $comando = $pdo->prepare("select * from produtos_imagens inner join produtos on produtos_imagens.id_produto = produtos.id_produto");
                                    $comando->execute();
                                    while ($linhas = $comando->fetch()){

                                        if (!empty($linhas["file_path"])){
                                            $img = $linhas["file_path"];
                                            $produto_img = "<img src='$img'>";
                                        } else {
                                            $produto_img = "<img src=''>";
                                        }

                                        $produto_nome = $linhas["nome"];
                                        $essential_id = $linhas["id_produto"];
                                        $produto_preco = $linhas["preco"];

                                        echo(
                                            "<div class='col-md-12 d-flex align-items-center mt-3'>
                                            <div class='col-md-1'>
                                                <img class='imagemLista rounded' src='$img' alt=''>
                                            </div>
                                            <h4 class='col-md-5'>
                                                $produto_nome
                                            </h4>
                                            <h4 class='col-md-4'>
                                                $produto_preco
                                            </h4>
        
                                            <div class='col-md-1'><button data-bs-toggle='modal'
                                            data-bs-target='#exampleModalCenter' onclick = \"preencher($essential_id);\" class='button-primario'
                                                    style='padding:0;width:48px !important;height:48px !important;'>
                                                    <svg fill='#fff' height='31px' width='31px' version='1.1' id='Layer_1'
                                                        xmlns='http://www.w3.org/2000/svg'
                                                        xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 512.008 512.008'
                                                        xml:space='preserve' stroke='#fff' stroke-width='1'>
                                                        <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                                                        <g id='SVGRepo_tracerCarrier' stroke-linecap='round'
                                                            stroke-linejoin='round'></g>
                                                        <g id='SVGRepo_iconCarrier'>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d='M504.507,79.905L432.102,7.499c-9.993-9.992-26.206-10.001-36.207,0L51.959,351.435c-2.807,2.807-4.924,6.238-6.187,10.01 L1.313,478.309c-3.063,9.199-0.674,19.336,6.187,26.197c6.861,6.861,16.998,9.25,26.197,6.187l116.864-44.459 c3.772-1.254,7.194-3.371,10.01-6.187l343.936-343.936C514.508,106.11,514.508,89.906,504.507,79.905z M25.608,486.398 l44.459-116.864l72.405,72.405L25.608,486.398z M160.571,423.841l-72.405-72.405L359.696,79.905l72.405,72.405L160.571,423.841z M450.201,134.211l-72.405-72.405l36.207-36.207l72.405,72.405L450.201,134.211z'>
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></button></div>
                                            <div class='col-md-1'><button data-bs-toggle='modal' data-bs-target='#excluir' class='button-primario'
                                                    style='padding:0;width:48px !important;height:48px !important;'><svg
                                                        width='36px' height='36px' viewBox='0 0 24 24' fill='none'
                                                        xmlns='http://www.w3.org/2000/svg'>
                                                        <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                                                        <g id='SVGRepo_tracerCarrier' stroke-linecap='round'
                                                            stroke-linejoin='round'></g>
                                                        <g id='SVGRepo_iconCarrier'>
                                                            <path
                                                                d='M10 10V16M14 10V16M18 6V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V6M4 6H20M15 6V5C15 3.89543 14.1046 3 13 3H11C9.89543 3 9 3.89543 9 5V6'
                                                                stroke='#fff' stroke-width='1.5' stroke-linecap='round'
                                                                stroke-linejoin='round'></path>
                                                        </g>
                                            </svg></button></div>
                                            </div>"
                                            );
                                }} else {
                                    $comando = $pdo->prepare("select * from usuarios where id_usuario = :id_usuario");
                                    $comando->bindParam(':id_usuario', $_SESSION["logado"]);
                                    $comando->execute();
                                    while ($linhas = $comando->fetch()){

                                        $user_nome = $linhas["nome"];
                                        $essential_id = $_SESSION["logado"];

                                        echo(
                                            "<div class='col-md-12 d-flex align-items-center mt-3'>
                                            // ALTERA ISSO AQUI BOTA O SVG DE USUARIO
                                            <div class='col-md-1'>
                                                <img class='imagemLista rounded' src='$img' alt=''>
                                            </div>
                                            ///////////////////////////////////////////////////////
                                            <h4 class='col-md-5'>
                                                $user_nome
                                            </h4>
                                            <div class='col-md-1'><button data-bs-toggle='modal' data-bs-target='#excluir' class='button-primario'
                                                    style='padding:0;width:48px !important;height:48px !important;'><svg
                                                        width='36px' height='36px' viewBox='0 0 24 24' fill='none'
                                                        xmlns='http://www.w3.org/2000/svg'>
                                                        <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                                                        <g id='SVGRepo_tracerCarrier' stroke-linecap='round'
                                                            stroke-linejoin='round'></g>
                                                        <g id='SVGRepo_iconCarrier'>
                                                            <path
                                                                d='M10 10V16M14 10V16M18 6V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V6M4 6H20M15 6V5C15 3.89543 14.1046 3 13 3H11C9.89543 3 9 3.89543 9 5V6'
                                                                stroke='#fff' stroke-width='1.5' stroke-linecap='round'
                                                                stroke-linejoin='round'></path>
                                                        </g>
                                            </svg></button></div>
                                            </div>"
                                            );
                                }}
                                ?>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-xl" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="../php/cadastrar_produto.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header fw-bold" style="font-size: 25px;">
                        Adicionar produto
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <label id="imagemInserirLabel" for="insereImagem" class="label-insere">
                                        <svg fill="#000000" width="48px" height="48px" viewBox="0 0 32 32" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M29 7h-4.599l-2.401-4h-12l-2.4 4h-4.6c-1 0-3 1-3 2.969v16.031c0 1.657 1.5 3 2.792 3h26.271c1.313 0 2.938-1.406 2.938-2.968v-16.032c0-1-1-3-3-3zM30 26.032c0 0.395-0.639 0.947-0.937 0.969h-26.265c-0.232-0.019-0.797-0.47-0.797-1v-16.031c0-0.634 0.851-0.953 1-0.969h5.732l2.4-4h9.802l1.785 3.030 0.55 0.97h5.731c0.705 0 0.99 0.921 1 1v16.032zM16 10c-3.866 0-7 3.134-7 7s3.134 7 7 7 7-3.134 7-7-3.134-7-7-7zM16 22c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                                                </path>
                                            </g>
                                        </svg>
                                        <div>
                                        Inserir imagem
                                    </div>
                                        <input type="file" name="insereImagem" id="insereImagem" class="imagemProduto">
                                </label>
                                <img id="imagemInserida" src="" alt="">
                                <div class="col-md-10">
                                    <div class="inside-body d-flex flex-column">
                                        <div class="top-side d-flex col-md-11 mb-2
                                        " style="gap:2.3rem">
                                            <div class="col-md-6"><input type="text" id="produto-nome-adicionar" name="produto-nome-adicionar"
                                                    class="form-control" placeholder="Nome"></div>
                                            <div class="col-md-3"><input type="text" id="produto-preço-adicionar" name="produto-preço-adicionar"
                                                    class="form-control" placeholder="Preço"></div>
                                                    <div class="col-md-3"><input type="text" data-bs-toggle="tooltip"
                                                        data-bs-title="Essa categoria não existe, deseja criá-la?"
                                                        id="produto-categoria-adicionar" name="produto-categoria-adicionar" class="form-control"
                                                        placeholder="categoria"></div>
                                        </div>
                                        <div class="bot-side col-md-12 mb-2">
                                            <textarea type="text" id="produto-descricao-adicionar" name="produto-descricao-adicionar" class="textarea"
                                                placeholder="Descrição"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <textarea id="produto-tecinfo-adicionar" name="produto-tecinfo-adicionar" class="textarea"
                                                placeholder="Informações técnicas"></textarea>
                                                <input type="hidden" id="produto_id" name="produto_id">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="bd1"style="padding-inline: 2em;" class="btn button-primario" name="submit-btn"> 
                            Salvar
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade modal-xl" id="excluir" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog" style="margin-top: 20%;">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex align-items-end flex-column">
                        <div class="col-md-12" style="font-size:1.475rem">
                                Confirmar exclusão?
                        </div>
                        <button <?php echo("onclick = \"deletar($essential_id);\"") ?>id="bd1"style="padding-inline: 2em;" class="btn button-primario" name="submit-btn"> 
                            Deletar
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $("#insereImagem").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagemInserida').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
            $('#imagemInserirLabel').css('display', 'none')
        });
        $(document).on('shown.bs.modal', function () {
            $('#produto-categoria-adicionar').bind('keypress', function (e) {
                if (e.keyCode == 13) {
                    if ($('#produto-categoria-adicionar').val() == '') {
                        $('#produto-categoria-adicionar').tooltip('toggle')
                    }
                    if (!$('#produto-categoria-adicionar').val() == '') {
                        $('#produto-categoria-adicionar').tooltip('dispose')
                        let textoCategoria = $('#produto-categoria-adicionar').val()
                        $('#categoriaAAdicionar').append(textoCategoria + ', ')
                    }

                }
            });
    })
});

function deletar(essential_id){
        let select = document.getElementById('selectTipo')
        let OP = select.selectedIndex
        console.log("VAI TOMA NO CU PIRANHA")
        window.open("../php/deletar.php?essential_id=" + essential_id + "&OP=" + OP, "_self")
    }

function preencher(produto_id){
    var dados = "produto_id=" + produto_id
    $.ajax({
        type: "GET",
        url: "../php/get_produtos_att.php",
        data: dados,
                        
        success: function(meu_json)
        {
            var valores = JSON.parse(meu_json); 
            var lista = valores.produto_att; 
            
            for(x=0;x<lista.length;x++)
            {   
                document.getElementById("produto_id").value = lista[x].id;
                document.getElementById("produto-nome-adicionar").value = lista[x].nome;
                document.getElementById("produto-preço-adicionar").value = lista[x].preco;
                document.getElementById("produto-descricao-adicionar").value = lista[x].descricao;
                document.getElementById("produto-tecinfo-adicionar").value = lista[x].informacoes_tecnicas;
            }
        }
    });
}

function md(){
    let select = document.getElementById('selectTipo')
    console.log(select.selectedIndex)
    window.open("index.php?op="+select.selectedIndex, "_self")
}

</script>
