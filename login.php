<?php
session_start();

$nome = filter_input(INPUT_GET, "nome");

if($nome)
{
    $_SESSION['nome'] = $nome;

    header("Location: index.php");
    exit;
}

?>

<form action="">
    Qual seu nome?<br>
    <input type="text" name="nome" id="nome">
    <br>
    <input type="submit" value="Enviar">
</form>