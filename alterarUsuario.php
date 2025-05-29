<?php
include("conexao.php");

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpfAnterior = $_POST["cpfAnterior"];

$stmt = $conn->prepare("UPDATE usuarios SET CPF = ?, Senha = ?, Nome = ? WHERE CPF = ?");
$stmt->bind_param("ssss", $cpf, $senha, $nome, $cpfAnterior);

if (!$stmt->execute()) {
    die("Erro ao alterar usuário");
}

header("Location: cadastrarUsuario.php");
exit();
?>
