<?php
include("autenticacao.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: rgb(125, 78, 170); 
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            color: white;
            font-weight: 600;
            border-bottom: 3px solid rgb(97, 42, 170); 
        }

        header a {
            color: #0090ff; 
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        header a:hover {
            color: #0056b3; 
        }

        .container {
            flex: 1;
            display: flex;
            max-width: 900px;
            margin: 40px auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        nav {
            width: 200px;
            background-color: rgb(125, 78, 170, 0.1); 
            padding: 30px 20px;
            border-right: 1px solid rgba(125, 78, 170, 0.3);
            color: rgb(60, 30, 90);
        }

        nav h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 20px;
        }

        nav a {
            display: block;
            padding: 10px 0;
            color: rgb(30, 60, 200); 
            text-decoration: none;
            font-size: 16px;
            border-bottom: 1px solid transparent;
            transition: border-color 0.2s ease, color 0.2s ease;
        }

        nav a:hover {
            color: rgb(0, 120, 255);
            border-bottom: 1px solid rgb(0, 120, 255);
        }

        main {
            flex: 1;
            padding: 30px 40px;
            color: #333;
        }

        main h2 {
            margin-top: 0;
            font-weight: 600;
            font-size: 26px;
            color: rgb(80, 40, 140);
        }

        main p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 20px 15px;
            }
            nav {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid rgba(125, 78, 170, 0.3);
                padding: 15px 10px;
            }
            main {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>

<header>
    <span>Olá, <?=htmlspecialchars($_SESSION['nome'])?></span>
    <a href="sair.php">Sair</a>
</header>

<div class="container">
    <nav>
        <h2>Menu</h2>
        <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
        <a href="cadastrarFilmes.php">Cadastrar Filmes</a>
        
    </nav>

    <main>
        <h2>Principal</h2>
        <p> teste teste test </p>
    </main>
</div>

</body>
</html>
