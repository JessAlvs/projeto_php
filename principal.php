<?php

include("autenticacao.php");


echo "cpf: ".$_SESSION['cpf'].'<br>';
echo "nome: ".$_SESSION['nome'].'<br>';
echo "senha: ".$_SESSION['senha'];
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(125, 78, 170);
            color: white;
            padding: 10px 20px;
        }

        .header span {
            font-size: 16px;
        }

        .header a {
            color: black;
            text-decoration: none;
            background-color: #d3d3d3;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .main-content {
            display: flex;
            gap: 20px;
        }

        .menu {
            width: 200px;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }

        .menu h2 {
            font-size: 18px;
        }

        .menu p {
            margin: 10px 0;
        }

        .menu a {
            color: black;
            text-decoration: none;
        }

        .content {
            flex-grow: 1;
            background-color: #ddd;
            padding: 20px;
            border-radius: 8px;
        }

        .content h2 {
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <div>
            <span>Olá <?=$_SESSION['nome'];?></span>
        </div>
        <div>
            <a href="sair.php">Sair</a>
        </div>
    </div>

    <div>
            <a href="cadastrarUsuario.php" class="btn-cadastro">Cadastrar Usuário</a>
        </div>
    </div>

    <div class="main-content">
        <div class="menu">
            <h2>Menu</h2>
            <p><a href="item.php">Item 1</a></p>
            <p>Item 2</p>
            <p>Item 3</p>
        </div>

        <div class="content">
            <h2>Manutenção de Filmes</h2>
            <!-- Conteúdo adicional aqui -->
        </div>
    </div>
</div>

</body>
</html>

