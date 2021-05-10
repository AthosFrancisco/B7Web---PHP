<?php
session_start();

if($_SESSION['nome'])
{
    echo 'Olá, '.$_SESSION['nome'].' - <a href="sair.php">Sair</a><br/>';
} 
else
{
    header("Location: login.php");
    exit;
}
