<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgb(74, 9, 134), rgb(97, 42, 170));
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 8px;
            width: 320px;
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0,0,0,0.25);
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: none;
            border-radius: 6px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: rgb(49, 5, 90);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: rgb(107, 0, 179);
        }
        .register-link {
            margin-top: 20px;
            display: block;
            color:rgb(240, 240, 240); 
            text-decoration: none;
            font-weight: 600;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <a href="cadastrarUsuario.php" class="register-link">Cadastrar Usuário</a>
    </div>
</body>
</html>
