<?php
require_once "../../includes/connection.php";
require_once "../../includes/head.php";
$sql  = "SELECT `id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work` FROM `planets` WHERE `id` = $_POST[id];
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
    <label for="message">Modifier la planète <?= $row["name"] ?> : </label><br><br>
    <input placeholder="Name" value="<?= $row["name"] ?>" type="text" name="name"></input>
    <input placeholder="Size" value="<?= $row["size"] ?>" type="text" name="size"></input>
    <input placeholder="Air" value="<?= $row["air"] ?>" type="text" name="air"></input>
    <input placeholder="Wildlife" value="<?= $row["wildlife"] ?>" type="text" name="wildlife"></input>
    <input placeholder="Flora" value="<?= $row["flora"] ?>" type="text" name="flora"></input>
    <input placeholder="Weather" value="<?= $row["weather"] ?>" type="text" name="weather"></input>
    <input placeholder="Water" value="<?= $row["water"] ?>" type="text" name="water"></input>
    <input placeholder="Work" value="<?= $row["work"] ?>" type="text" name="work"></input>
</div>
<input type="hidden" name="id" value="<?=$row["id"]?>">
            <!-- Sending all the modifications to the doedit.php file -->
<button onclick="return confirm('Voulez-vous vraiment ajouter ceci ?')" type="submit" class="btn btn-info">Send it !</button>
</form>
</div>
</body>
</html>