<?php
// Require the file connexion.php to connect to the database
require_once "../../includes/connection.php";

// DELETE FROM is used to delete a data from a database, here : "planetes", where the needed id is located
$sql = "DELETE FROM
  `station`
WHERE
  `id` = :id
;";
$stmt = $pdo->prepare($sql);

// Bind the value $_POST['id'] for :id
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

// If there's an error, execute the code below
if ($stmt->errorCode() !== '00000') {
    var_dump($stmt->errorInfo());
}

// Redirecting to the display page (index.php in our case)

$msg = 'deleted';

header("Location: ../../index.php?msg=".$msg."#station");