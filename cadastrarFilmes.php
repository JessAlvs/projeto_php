<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to right,rgb(74, 9, 134),rgb(97, 42, 170));
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-size: 16px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #0072ff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: rgb(49, 5, 90);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: rgb(107, 0, 179);
        }

        .form-footer {
            text-align: center;
            margin-top: 15px;
        }

        .form-footer a {
            color: #0072ff;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<?php
include("conexao.php")
?>

<body>
    <div style= " background-color: #ddd; min-height: 400px; width: 600px; float:left">
        <h2>Manutenção do Filme</h2>
        <h2>Cadastrar Novo Filme</h2>
        <form method="post" action="inserirFilme.php">
            Nome:<input type="text" id="nome" id="nome"><br>
            Ano: <input type="text" id="ano" id="ano"><br>
            Genero: <select name="genero">
                        <option value="">Selecione um Gênero</option>
                    <?php
                    $sql = "select * from generos where status=1 ";
                    if(!$resultado = $conn->query($sql)){
                        die("erro");
                    } 
                    while($row = $resultado->fetch_assoc()){
                        ?>
                        <option value="<?=$row['genero'];?>"><?=$row['descricao'];?></option>
                        <?php
                    }
            ?>
                    </select>
            <input type="submit" value="inserir">
        </form>
    </div>
    <br><br><hr><br><br>
    
    <?php
    /*
        include("conexao.php")

        $sql = "select nome,cpf, senha from usuarios ";
        if(!$resultado = $conn->query($sql)){
            die("erro");
        }
    ?>

    <table>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Senha</td>
            <td>Alterar</td>
            <td>Apagar</td>
        </tr>

    <?php
    while($row = $resultado->fetch_assoc()){
        ?>

        <tr>
            <form method="post" action="alterarUsuario.php">
                <input type="hidden" name="cpfAnterior" value="<?-$row['cpf'];?>">
                <td>
                    <input type="text" name="nome" value="<?-$row['nome'];?>">
                </td>
                <td> <input type="text" name="cpf" value="<?-$row['cpf'];?>"> </td>
                <td> <input type="text" name="senha" value="<?-$row['senha'];?>"> </td>
                <td> <input type="submit" value="alterar"> </td>
            </from>
        </tr>
        <?php 
    }
    ?> </table>
*/

</body>
</html>
