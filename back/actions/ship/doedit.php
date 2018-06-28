<?php
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";
// Updating the values below from the "planetes" table where there's the needed id
$sql = "UPDATE `db_space`.`ship` SET `name`=:name, `size`=:size, `air`=:air, `duration`=:duration, `spacing`=:spacing, `connection`=:connection, `installations`=:installations, `link`=:link `durationdesc`=:durationdesc, `connectiondesc`=:connectiondesc, `spacingdesc`=:spacingdesc, `installationsdesc` WHERE `id`=:id
;";

if(empty($_POST['name']) OR empty($_POST['size']) OR empty($_POST['air']) OR empty($_POST['duration']) OR empty($_POST['spacing']) OR empty($_POST['connection']) OR empty($_POST['installations']))
    {
    $msg = 'error';
    header("Location: ../../index.php?msg=".$msg."#ship");
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
$stmt->bindValue(':duration', $_POST['duration']);
$stmt->bindValue(':spacing', $_POST['spacing']);
$stmt->bindValue(':connection', $_POST['connection']);
$stmt->bindValue(':installations', $_POST['installations']);
$stmt->bindValue(':link', $_POST['link']);
$stmt->bindValue(':durationdesc', $_POST['durationdesc']);
$stmt->bindValue(':connectiondesc', $_POST['connectiondesc']);
$stmt->bindValue(':spacingdesc', $_POST['spacingdesc']);
$stmt->bindValue(':installationsdesc', $_POST['installationsdesc']);
$stmt->execute();
errorHandler($stmt);

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

$msg = 'edited';

header("Location: ../../index.php?msg=".$msg."#ship");

    }