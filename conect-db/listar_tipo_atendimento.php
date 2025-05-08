<?php
// 1. Conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=ratendimento', 'root', '');

// 2. Executar SELECT para buscar todos os dados da tabela
$stmt = $pdo->query("SELECT * FROM tipo_atendimento");

// 3. Guardar os dados retornados em uma variável
$tipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tipos de Atendimento</title>
</head>
<body>
    <h1>Tipos de Atendimento</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Ativo</th>
        </tr>

        <?php foreach ($tipos as $tipo): ?>
            <tr>
                <td><?= $tipo['id_tipo_atendimento'] ?></td>
                <td><?= $tipo['tipo_atendimento'] ?></td>
                <td><?= $tipo['ativo'] === 'S' ? 'Sim' : 'Não' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>