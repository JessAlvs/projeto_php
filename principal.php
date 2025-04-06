<?php

include("autenticacao.php");


echo "cpf: ".$_SESSION['cpf'].'<br>';
echo "nome: ".$_SESSION['nome'].'<br>';
echo "senha: ".$_SESSION['senha'];
?>


<html> 
    <head>
    </head>

    <body> 

    <div style = "width: 800px; margin: 0 auto;">
        <div style="min-height: 100px; width: 100%; background-color: #4CAF50;";>
            <div style="width: 50%; float:left">
            <span style="padding-left: 10px;">Olá <?=$_SESSION['nome'];?></span>
            </div>

            <div style="width: 50%; float: left; text-align:right;">
            <span style="background-color:blue; margin-right:10px;"> <a href="sair.php"><font color="black">
            </div>

        </div>
        <div id="menu" style="width: 200px; background-color: #f4f4f4; min-height: 400px; float: left;">
            <h2>Menu</h2>
            <p><a href="item.php"><font color="black">item 1</font></a></p>
            <p>Item 2</p>
            <p>Item 3</p>
        </div>

        <div style="background-color: #ddd; min-height: 400px; width: 600px; float: left">
            <h2>Manutenção de Filmes</h2>

        </div>
    </div>


    </body>

</html>
