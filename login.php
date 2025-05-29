<?php
include("conexao.php");

if (!isset($_POST['cpf']) || $_POST['cpf'] == '') {
    die("Insira um CPF");
}

if (!isset($_POST['senha']) || $_POST['senha'] == '') {
    die("Favor informar a senha");
}

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$sql = "SELECT Nome FROM usuarios WHERE CPF = ? AND Senha = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['Nome'])) {
            session_start();
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row['Nome'];

            header("Location: principal.php");
            exit();
        } else {
            die("Senha Incorreta");
        }
    } else {
        die("Nenhum Usuário Encontrado!");
    }
} else {
    die("Erro na consulta.");
}
?>
