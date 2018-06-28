<?php
require_once "../../includes/connection.php";
$sql  = "INSERT INTO 
`db_space`.`aiopacks` 
(`name`, `description`, `img`) 
VALUES 
(:name, :description, :img);

";
if(empty($_POST['name']) OR empty($_POST['description']) OR empty($_POST['img']))
    {
    $msg = 'error';
    header("Location: ../../index.php?msg=".$msg);
    }

// All the needed fields are set, we're now entering into the database
else
    {
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();
errorHandler($stmt);

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'success';

header("Location: ../../index.php?msg=".$msg."#aiopacks");
    }
