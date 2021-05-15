<?php
require 'config.php';
session_start();

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($nome && $email && $id){

    $passwordQuery = ($password) ? ", password = :password " : "";

    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email".$passwordQuery." WHERE id = :id");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    ($password) ? $sql->bindValue(":password", md5($password)) : "";
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: index.php");
    exit;
   
}else{
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['mensagem'] = "dados do form incompletos";

    header("Location: editar.php?id=".$id);
    exit;
}