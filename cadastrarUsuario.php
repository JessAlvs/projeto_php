<?php
include("conexao.php");

$sql = "SELECT Nome, CPF, Senha FROM usuarios";
$resultado = $conn->query($sql);

if (!$resultado) {
    die("Erro na consulta");
}
?>

<table>
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Senha</th>
        <th>Alterar</th>
        <th>Apagar</th>
    </tr>

    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <form method="post" action="alterarUsuario.php">
                <input type="hidden" name="cpfAnterior" value="<?=htmlspecialchars($row['CPF'])?>">
                <td><input type="text" name="nome" value="<?=htmlspecialchars($row['Nome'])?>"></td>
                <td><input type="text" name="cpf" value="<?=htmlspecialchars($row['CPF'])?>"></td>
                <td><input type="text" name="senha" value="<?=htmlspecialchars($row['Senha'])?>"></td>
                <td><input type="submit" value="Alterar"></td>
            </form>
            <form method="post" action="apagarUsuario.php">
                <input type="hidden" name="cpf" value="<?=htmlspecialchars($row['CPF'])?>">
                <td><input type="submit" value="Apagar"></td>
            </form>
        </tr>
    <?php } ?>
</table>
