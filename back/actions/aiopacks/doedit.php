<?php
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";
// Updating the values below from the "planetes" table where there's the needed id
$sql = "UPDATE `db_space`.`aiopacks` SET `name`=:name, `description`=:description, `img`=:img WHERE `id`=:id
;";

if(empty($_POST['name']) OR empty($_POST['description']) OR empty($_POST['img']))
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
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':img', $_POST['img']);

$stmt->execute();
errorHandler($stmt);

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'edited';

header("Location: ../../index.php?msg=".$msg."#aiopacks");

    }