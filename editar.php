<?php
require 'config.php';
session_start();

$id = filter_input(INPUT_GET, "id");
$usuario = [];
$nome = "";
$email = "";
$mensagem = "";

if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario = $sql->fetch( PDO::FETCH_ASSOC );

        $nome = $_SESSION['nome'] ?? $usuario['nome'];
        $email = $_SESSION['email'] ?? $usuario['email'];
        $mensagem = $_SESSION['mensagem'] ?? '';
    }else{
        header("Location: index.php");
        exit;
    }
    
}else{
    header("Location: index.php");
    exit;
}

if($mensagem){
    echo '<h3 style="color:red">'.$mensagem.'</h3>';
}

$_SESSION['nome'] = null;
$_SESSION['email'] = null;
$_SESSION['mensagem'] = null;
?>

<h1>Editar Usuário</h1>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$usuario['id']?>">

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