<?php
require 'config.php';

$sql = $pdo->query("SELECT * FROM usuarios");
// $sql = $sql->fetchAll(PDO::FETCH_ASSOC);

$lista = [];
if($sql->rowCount()){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<a href="adicionar.php">Adicinar Usuário</a>
<br>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $item): ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['nome']?></td>
        <td><?=$item['email']?></td>
        <td>
            <a href="editar.php?id=<?=$item['id']?>">[ Editar ]</a>
            <a href="excluir.php?id=<?=$item['id']?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>