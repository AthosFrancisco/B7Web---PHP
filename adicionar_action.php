<?php
require 'config.php';
session_start();

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if($nome && $password && $email){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuarios(nome, email, password) VALUES (:nome, :email, :password)");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", md5($password));
        $sql->execute();
    
        header("Location: index.php");
        exit;
    }else{
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['mensagem'] = "email já existe";

        header("Location: adicionar.php");
        exit;
    }
}else{
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['mensagem'] = "dados do formulário incompletos";

    header("Location: adicionar.php");
    exit;
}