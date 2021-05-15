<?php
session_start();

$nome = $_SESSION['nome'] ?? '';
$email = $_SESSION['email'] ?? '';
$mensagem = $_SESSION['mensagem'] ?? '';

$_SESSION['nome'] = "";
$_SESSION['email'] = "";
$_SESSION['mensagem'] = "";

if($mensagem){
    echo '<h3 style="color:red">'.$mensagem.'</h3>';
}
?>

<h1>Adicionar Usuário</h1>

<form action="adicionar_action.php" method="POST">
    <label for="nome">
        Nome <br>
        <input type="text" name="nome" id="nome" value="<?=$nome?>">
    </label><br><br>

    <label for="email">
        Email <br>
        <input type="email" name="email" id="email" value="<?=$email?>">
    </label><br><br>

    <label for="password">
        Senha <br>
        <input type="password" name="password" id="password">
    </label><br><br>

    <input type="submit" value="Enviar">
</form>