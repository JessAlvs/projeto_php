<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Filme</title>
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
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-top: 12px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
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
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: rgb(107, 0, 179);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #0072ff;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<?php
include("conexao.php");

?>

<body>
    <div class="login-container">
        <h2>Manutenção do Filme</h2>
        <h2>Cadastrar Novo Filme</h2>
        <form method="post" action="inserirFilme.php">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="ano">Ano:</label>
            <input type="text" name="ano" id="ano" required>

            <label for="genero">Gênero:</label>
            <select name="genero" id="genero" required>
                <option value="">Selecione um Gênero</option>
                <?php
                    $sql = "SELECT * FROM genero";
                  
                    if(!$resultado = $conn->query($sql)){
                        die("Erro ao buscar gêneros");
                    } 
                 
                    while($row = $resultado->fetch_assoc()){
                        ?>
                        <option value="<?= htmlspecialchars($row['genero']); ?>"><?= htmlspecialchars($row['descricao']); ?></option>
                        <?php
                    }
                ?>
            </select>

            <input type="submit" value="Inserir">
        </form>

        <a href="principal.php" class="back-link">Voltar para página principal</a>
    </div>
</body>
</html>
