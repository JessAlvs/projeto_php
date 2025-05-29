<?php
include("conexao.php");

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT COUNT(*) as qt FROM usuarios WHERE CPF = ?");
$stmt->bind_param("s", $cpf);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['qt'] > 0) {
    die("Usuário já existente");
}


$stmt = $conn->prepare("INSERT INTO usuarios (CPF, Nome, Senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $cpf, $nome, $senha);

if ($stmt->execute()) {
    header("Location: cadastrarUsuario.php?status=success");
    exit();
} else {
    die("Erro ao inserir usuário");
}
?>
