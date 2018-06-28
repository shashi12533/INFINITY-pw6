<?php
require_once "../../includes/connection.php";

$sql  = "INSERT INTO 
`db_space`.`ship` 
(`name`, `size`, `air`, `duration`, `spacing`, `connection`, `installations`, `link` ,`durationdesc`, `connectiondesc`, `spacingdesc`, `installationsdesc`) 
VALUES 
(:name, :size, :air, :duration, :spacing, :connection, :installations, :link, :durationdesc, :connectiondesc, :spacingdesc, :installationsdesc);

";
if(empty($_POST['name']) OR empty($_POST['size']) OR empty($_POST['air']) OR empty($_POST['duration']) OR empty($_POST['spacing']) OR empty($_POST['connection']) OR empty($_POST['installations']) OR empty($_POST['link']))
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

$msg = 'success';

header("Location: ../../index.php?msg=".$msg."#ship");
    }
