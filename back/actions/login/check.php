<?php

require_once "../../includes/connection.php";

// echo $_POST['usr'];

if (!isset($_POST['usr'])) {
    header("Location: ../../../public/sign.php");
    exit;
}

$sql = "SELECT * FROM login WHERE usr = :usr";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':usr', $_POST['usr']);
$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($users);

if ($users['type'] == 'A' && password_verify($_POST['pwd'], $users["pwd"])) {
    echo 'Le mot de passe est valide. Bienvenue, ' . $users["surname"] . ' (Administrateur).';
} else {

    if (password_verify($_POST['pwd'], $users["pwd"])) {
        echo 'Le mot de passe est valide. Bienvenue, ' . $users["surname"] . ' (Utilisateur).';
    } else {
        header("Location: ../../../public/sign.php");
    }

}



// echo password_verify($_POST['pwd'], $users["pwd"]);