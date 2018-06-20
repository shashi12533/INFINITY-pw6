<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_space','root','coucou');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->query("SET NAMES UTF8;");
