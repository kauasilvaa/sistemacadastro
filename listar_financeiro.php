<?php
require_once 'Controllers/FinanceiroController.php';

$financeiroController = new FinanceiroController();
$vendas = $financeiroController->listarVendas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista Financeira</title>
    <link rel="stylesheet" href="style.css"> <!-- Altere o caminho conforme necessário -->
</head>
<body>
    <h2>Lista Financeira</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome do Cliente</th>
            <th>CPF do Cliente</th>
            <th>Valor Total</th>
            <th>Data da Venda</th>
        </tr>
        <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $venda['id'] ?></td>
                <td><?= htmlspecialchars($venda['nome_cliente']) ?></td>
                <td><?= htmlspecialchars($venda['cpf_cliente']) ?></td>
                <td><?= htmlspecialchars($venda['valor_total']) ?></td>
                <td><?= htmlspecialchars($venda['data_venda']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="listagens.php">Voltar</a>
</body>
</html>
