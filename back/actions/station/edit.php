<?php
require_once "../../includes/connection.php";
require_once "../../includes/head.php";
$sql  = "SELECT `id`, `name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff` FROM `station` WHERE `id` = $_POST[id];
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  ?>


  <?php
  $row = $stmt->fetch(PDO::FETCH_ASSOC)
  ?>

  <div class="container">

  <form method="post" action="./doedit.php">
<div class="form-group">
    <label for="message">Modifier la station <?= $row["name"] ?> : </label>
    <input placeholder="Name" value="<?= $row["name"] ?>" type="text" name="name"></input>
    <input placeholder="Size" value="<?= $row["size"] ?>" type="text" name="size"></input>
    <input placeholder="Air" value="<?= $row["air"] ?>" type="text" name="air"></input>
    <input placeholder="Residence" value="<?= $row["residence"] ?>" type="text" name="residence"></input>
    <input placeholder="Activity" value="<?= $row["activity"] ?>" type="text" name="activity"></input>
    <input placeholder="Leisure" value="<?= $row["leisure"] ?>" type="text" name="leisure"></input>
    <input placeholder="Services" value="<?= $row["services"] ?>" type="text" name="services"></input>
    <input placeholder="Land" value="<?= $row["land"] ?>" type="text" name="land"></input>
    <input placeholder="Work" value="<?= $row["staff"] ?>" type="text" name="staff"></input>
</div>
<input type="hidden" name="id" value="<?=$row["id"]?>">
            <!-- Sending all the modifications to the doedit.php file -->
<button onclick="return confirm('Voulez-vous vraiment ajouter ceci ?')" type="submit" class="btn btn-info">Send it !</button>
</form>
</div>
</body>
</html>