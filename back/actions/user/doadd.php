<?php

require_once "../../includes/connection.php";

$sql = "INSERT INTO
  `db_space`.`user`
  (`name`,`age`,`nationality`,`size`,`weight`,`allergy`,`diet`,`infirmity`,`medication`,`respiratory`,`mental`,`cardiac`,`fear`,`alcohol`,`drug`,`family`,`pregnant`,`professional`,`phone`,`mail`,`address`)
VALUES
  (:name, :age, :nationality, :size, :weight, :allergy, :diet, :infirmity, :medication, :respiratory, :mental, :cardiac, :fear, :alcohol, :drug, :family, :pregnant, :professional, :phone, :mail, :address)
;";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':age', $_POST['age']);
$stmt->bindValue(':nationality', $_POST['nationality']);
$stmt->bindValue(':size', $_POST['size']);
$stmt->bindValue(':weight', $_POST['weight']);
$stmt->bindValue(':allergy', $_POST['allergy']);
$stmt->bindValue(':diet', $_POST['diet']);
$stmt->bindValue(':infirmity', $_POST['infirmity']);
$stmt->bindValue(':medication', $_POST['medication']);
$stmt->bindValue(':respiratory', $_POST['respiratory']);
$stmt->bindValue(':mental', $_POST['mental']);
$stmt->bindValue(':cardiac', $_POST['cardiac']);
$stmt->bindValue(':fear', $_POST['fear']);
$stmt->bindValue(':alcohol', $_POST['alcohol']);
$stmt->bindValue(':drug', $_POST['drug']);
$stmt->bindValue(':family', $_POST['family']);
$stmt->bindValue(':pregnant', $_POST['pregnant']);
$stmt->bindValue(':professional', $_POST['professional']);
$stmt->bindValue(':phone', $_POST['phone']);
$stmt->bindValue(':mail', $_POST['mail']);
$stmt->bindValue(':address', $_POST['address']);
$stmt->execute();
errorHandler($stmt);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

header ("Location: ../../form.php");
