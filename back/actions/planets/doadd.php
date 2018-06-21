<?php
require_once "../../includes/connection.php";
$sql  = "INSERT INTO 
`db_space`.`planets` 
(`name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`, `link`) 
VALUES 
(:name, :size, :air, :wildlife, :flora, :weather, :water, :work, :link);

";
if(empty($_POST['name']) OR empty($_POST['size']) OR empty($_POST['air']) OR empty($_POST['wildlife']) OR empty($_POST['flora']) OR empty($_POST['weather']) OR empty($_POST['water']) OR empty($_POST['work']) OR empty($_POST['link']))
    {
    $msg = 'error';
    header("Location: ../../index.php?msg=".$msg);
    }

// All the needed fields are set, we're now entering into the database
else
    {
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':size', $_POST['size']);
$stmt->bindValue(':air', $_POST['air']);
$stmt->bindValue(':wildlife', $_POST['wildlife']);
$stmt->bindValue(':flora', $_POST['flora']);
$stmt->bindValue(':weather', $_POST['weather']);
$stmt->bindValue(':water', $_POST['water']);
$stmt->bindValue(':work', $_POST['work']);
$stmt->bindValue(':link', $_POST['link']);
$stmt->execute();
errorHandler($stmt);

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'success';

header("Location: ../../index.php?msg=".$msg."#planet");
    }
