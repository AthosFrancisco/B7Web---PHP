<?php
session_start();
$_SESSION['nome'] = '';

header("Location: index.php");
exit;
