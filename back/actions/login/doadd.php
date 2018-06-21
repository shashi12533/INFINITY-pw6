<?php
require_once "../../includes/connection.php";
$sql  = "INSERT INTO 
`db_space`.`login` 
(`usr`, `pwd`, `name`, `surname`) 
VALUES 
(:usr, :pwd, :name, :surname);
";

// All the needed fields are set, we're now entering into the database

$stmt = $pdo->prepare($sql);
$hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$stmt->bindValue(':usr', $_POST['mail']);
$stmt->bindValue(':pwd', $hash);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':surname', $_POST['surname']);
$stmt->execute();
errorHandler($stmt);

header("Location: ../../../public/sign.php");