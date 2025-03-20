<?php

if(!isset($_POST['usuario']) || $_POST['usuario'] == ''){
    die("Favor informar o usuário");
}

if(!isset($_POST['senha']) || $_POST['senha'] == ''){
    die("Favor informar a senha");
}

if(!isset($_POST['usuario']) == '123' || $_POST['senha'] == '123'){
    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];

    header("Location: principal.php");
    die;
}else{
    die("usuario e senha incorretos");
}




?>