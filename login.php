<?php

include("conexao.php");

$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

if(!isset($_POST['cpf']) || $_POST['cpf'] == ''){
    die("Insira um CPF");
}

if(!isset($_POST['senha']) || $_POST['senha'] == ''){
    die("Favor informar a senha");
}

$sql = "select nome from usuarios where cpf='$cpf' and senha='$senha'";
    
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

if(isset($row) && $row['nome'] != ''){
    session_start();
    $_SESSION['cpf'] = $cpf;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome']= $row['nome'];
    header("Location: principal.php");
}else{
    echo "senha incorreta";
}

?>