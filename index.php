<?php
session_start();
require_once('header.php');

$existeSessao = !empty($_SESSION['aviso']);

if($existeSessao){
    echo $_SESSION['aviso'].'<br/>';
    $_SESSION['aviso'] = '';
}
?>
<a href="apagar.php">Apagar Cookie</a>

<form action="recebedor.php" method="POST">
    Nome: <br>
    <input type="text" name="nome" id="nome">
    <br>
    <br>
    e-mail: <br>
    <input type="email" name="email" id="email">
    <br>
    <br>
    Idade: <br>
    <input type="text" name="idade" id="idade">
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>