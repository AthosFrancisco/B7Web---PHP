<?php
require 'config.php';
// $pdo = new PDO("mysql:dbname=test;host:localhost", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios');

$sql = $sql->fetchAll( PDO::FETCH_ASSOC );

echo '<pre>';
print_r($sql);