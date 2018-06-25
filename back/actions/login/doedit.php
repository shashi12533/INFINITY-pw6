<?php
session_start ();
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";
// Updating the values below from the "planetes" table where there's the needed id
$sql = "UPDATE `db_space`.`login` SET `name`=:name, `surname`=:surname, `img`=:img WHERE `id`=$_SESSION[id]
;";

    // Preparing the update session
$stmt = $pdo->prepare($sql);
// Taking and binding all the values
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':surname', $_POST['surname']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();
errorHandler($stmt);

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

session_unset ();

session_destroy ();

$msg = 'modified';
header("Location: ../../../public/sign.php?msg=".$msg);