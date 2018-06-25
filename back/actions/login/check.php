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
    session_start ();

    $_SESSION['id'] = $users['id'];
    $_SESSION['usr'] = $_POST['usr'];
    $_SESSION['pwd'] = $_POST['pwd'];
    $_SESSION['name'] = $users['name'];
    $_SESSION['surname'] = $users['surname'];
    $_SESSION['img'] = $users['img'];
    $_SESSION['type'] = $users['type'];

    header("Location: ../../../public/profile.php");
} else {

    if (password_verify($_POST['pwd'], $users["pwd"])) {
        
        session_start ();
        
        $_SESSION['id'] = $users['id'];
        $_SESSION['usr'] = $_POST['usr'];
        $_SESSION['pwd'] = $_POST['pwd'];
        $_SESSION['name'] = $users['name'];
        $_SESSION['surname'] = $users['surname'];
        $_SESSION['img'] = $users['img'];
        $_SESSION['type'] = $users['type'];

        header("Location: ../../../public/profile.php");
    } else {
        $msg = 'error';
        header("Location: ../../../public/sign.php?msg=".$msg);
    }
}



// echo password_verify($_POST['pwd'], $users["pwd"]);