<?php
require_once "../../includes/connection.php";
$sql  = "INSERT INTO 
`db_space`.`login` 
(`usr`, `pwd`, `name`, `surname`, `type`, `img`) 
VALUES 
(:usr, :pwd, :name, :surname, 'U', 'https://image.ibb.co/e7CtEo/astronaut.png');
";

// All the needed fields are set, we're now entering into the database

if ($_POST['pwd'] === $_POST['vpwd']) {
    $stmt = $pdo->prepare($sql);
    $hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $stmt->bindValue(':usr', $_POST['mail']);
    $stmt->bindValue(':pwd', $hash);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':surname', $_POST['surname']);
    $stmt->execute();
    errorHandler($stmt);
    
    $msg = 'registered';
    header("Location: ../../../public/sign.php?msg=".$msg);
    
} else {
    $msg = 'notsame';
    header("Location: ../../../public/sign.php?msg=".$msg);
}