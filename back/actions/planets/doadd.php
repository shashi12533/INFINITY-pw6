<?php
require_once "../../includes/connection.php";

$sql  = "INSERT INTO 
`db_space`.`planets` 
(`name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`) 
VALUES 
(:name, :size, :air, :wildlife, :flora, :weather, :water, :work);

";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':size', $_POST['size']);
$stmt->bindValue(':air', $_POST['air']);
$stmt->bindValue(':wildlife', $_POST['wildlife']);
$stmt->bindValue(':flora', $_POST['flora']);
$stmt->bindValue(':weather', $_POST['weather']);
$stmt->bindValue(':water', $_POST['water']);
$stmt->bindValue(':work', $_POST['work']);
$stmt->execute();

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'success';

header("Location: ../../index.php?msg=".$msg);

