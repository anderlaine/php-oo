<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$pdo = new PDO('mysql:host=localhost;dbname=formacao_php','anderson','budega');

$sql = 'SELECT * FROM products';

$get=$pdo->query($sql);
$get->fetchAll(PDO::FETCH_ASSOC);


print_r($get);