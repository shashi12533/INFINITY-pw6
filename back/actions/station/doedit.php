<?php
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";
// Updating the values below from the "planetes" table where there's the needed id
$sql = "UPDATE `db_space`.`station` SET `name`=:name, `size`=:size, `air`=:air, `residence`=:residence, `activity`=:activity, `leisure`=:leisure, `services`=:services, `land`=:land, `staff`=:staff WHERE `id`=:id
;";

// Preparing the update session
$stmt = $pdo->prepare($sql);
// Taking and binding all the values
$stmt->bindParam(":id", $_POST['id']);
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

$msg = 'edited';

header("Location: ../../index.php?msg=".$msg);