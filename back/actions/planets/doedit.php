<?php
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";
// Updating the values below from the "planetes" table where there's the needed id
$sql = "UPDATE `db_space`.`planets` SET `name`=:name, `size`=:size, `air`=:air, `wildlife`=:wildlife, `flora`=:flora, `weather`=:weather, `water`=:water, `work`=:work, `link`=:link WHERE `id`=:id
;";

if(empty($_POST['name']) OR empty($_POST['size']))
    {
    $msg = 'error';
    header("Location: ../../index.php?msg=".$msg);
    }

// All the needed fields are set, we're now entering into the database
else
    {
// Preparing the update session
$stmt = $pdo->prepare($sql);
// Taking and binding all the values
$stmt->bindParam(":id", $_POST['id']);
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

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'edited';

header("Location: ../../index.php?msg=".$msg."#planet");

    }