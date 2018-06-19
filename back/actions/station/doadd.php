<?php
require_once "../../includes/connection.php";

$sql  = "INSERT INTO 
`db_space`.`station` 
(`name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff`) 
VALUES 
(:name, :size, :air, :residence, :activity, :leisure, :services, :land, :staff);

";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':size', $_POST['size']);
$stmt->bindValue(':air', $_POST['air']);
$stmt->bindValue(':residence', $_POST['residence']);
$stmt->bindValue(':activity', $_POST['activity']);
$stmt->bindValue(':leisure', $_POST['leisure']);
$stmt->bindValue(':services', $_POST['services']);
$stmt->bindValue(':land', $_POST['land']);
$stmt->bindValue(':staff', $_POST['staff']);
$stmt->execute();

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'success';

header("Location: ../../index.php?msg=".$msg);

