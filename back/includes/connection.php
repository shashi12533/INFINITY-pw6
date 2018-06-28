<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_space','root','');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->query("SET NAMES UTF8;");

function errorHandler(PDOStatement $stmt) : void
{
    if ($stmt->errorCode() !== '00000') {
        var_dump($stmt->errorInfo());
        die();
    }
}
