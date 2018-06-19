<?php
require_once "includes/connection.php";
require_once "includes/head.php";
$planets  = "SELECT `id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work` FROM `planets`
";
$planets_stmt = $pdo->prepare($planets);
$planets_stmt->execute();

$station  = "SELECT `id`, `name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff` FROM `station`
";
$station_stmt = $pdo->prepare($station);
$station_stmt->execute();

?>
<div class="container">
<div id="msg">
    <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'){ ?>
         <div class="alert alert-success">
             <strong>Succès !</strong> L'objet a été ajouté.
         </div>
    <?php } ?>

        <?php if(isset($_GET['msg']) && $_GET['msg'] == 'edited'){ ?>
         <div class="alert alert-info">
             <strong>Succès !</strong> L'objet a été modifié.
         </div>
    <?php } ?>
    
    <?php if(isset($_GET['msg']) && $_GET['msg'] == 'deleted'){ ?>
        <div class="alert alert-danger">
    <strong>Succès !</strong> L'objet a été supprimé.
  </div>
    <?php } unset($_GET['msg']); ?>
</div>


<div class="container">
    <div class="card mt-5">
      <div class="card-body">
    <label for="message">Entrer une planète : </label><br><br>
    <form method="post" action="actions/planets/doadd.php">
    <input placeholder="Name" type="text" name="name"></input>
    <input placeholder="Size" type="text" name="size"></input>
    <input placeholder="Air" type="text" name="air"></input>
    <input placeholder="Wildlife" type="text" name="wildlife"></input><br><br>
    <input placeholder="Flora" type="text" name="flora"></input>
    <input placeholder="Weather" type="text" name="weather"></input>
    <input placeholder="Water" type="text" name="water"></input>
    <input placeholder="Work" type="text" name="work"></input><br><br><br>
<button onclick="return confirm('Voulez-vous vraiment ajouter ceci ?')" type="submit" class="btn btn-info">Ajouter</button>
</form>
</div>
</div>
</div>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
    <label for="message">Entrer une station : </label><br><br>
    <form method="post" action="actions/station/doadd.php">
    <input placeholder="Name" type="text" name="name"></input>
    <input placeholder="Size" type="text" name="size"></input>
    <input placeholder="Air" type="text" name="air"></input>
    <input placeholder="Residence" type="text" name="residence"></input><br><br>
    <input placeholder="Activity" type="text" name="activity"></input>
    <input placeholder="Leisure" type="text" name="leisure"></input>
    <input placeholder="Services" type="text" name="services"></input>
    <input placeholder="Land" type="text" name="land"></input><br><br>
    <input placeholder="Staff" type="text" name="staff"></input><br><br><br>
<button onclick="return confirm('Voulez-vous vraiment ajouter ceci ?')" type="submit" class="btn btn-info">Ajouter</button>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
<table class="table table-bordered">
    <tr>
    <label for="message">Liste des planètes : </label><br><br>
        <th>Name</th>
        <th>Size</th>
        <th>Air</th>
        <th>Wildlife</th>
        <th>Flora</th>
        <th>Weather</th>
        <th>Water</th>
        <th>Work</th>
        <th>Actions</th>
    </tr>
<?php
while ($row = $planets_stmt->fetch(PDO::FETCH_ASSOC)) {
?>
   <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['size'] ?> km&#179</td>
        <td><?= $row['air'] ?></td>
        <td><?= $row['wildlife'] ?></td>
        <td><?= $row['flora'] ?></td>
        <td><?= $row['weather'] ?></td>
        <td><?= $row['water'] ?></td>
        <td><?= $row['work'] ?></td>
        <td>
        <form action="./actions/planets/edit.php" method="post">
            <input name="id" type="hidden" value="<?= $row["id"] ?>">
            <input type="submit" class="btn btn-info" value="Modifier">
        </form>
        <br>
            <form action="actions/planets/dodelete.php" method="post">
            <input name="id" type="hidden" value="<?= $row["id"] ?>">
            <input type="submit" class="btn btn-danger" value="Supprimer">
        </form>
        </td>
    </tr>
<?php
}
?>
</table>

<table class="table table-bordered">
    <tr>
    <label for="message">Liste des stations : </label><br><br>
        <th>Name</th>
        <th>Size</th>
        <th>Air</th>
        <th>Residence</th>
        <th>Activity</th>
        <th>Leisure</th>
        <th>Services</th>
        <th>Land</th>
        <th>Staff</th>
        <th>Actions</th>
    </tr>
<?php
while ($row = $station_stmt->fetch(PDO::FETCH_ASSOC)) {
?>
   <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['size'] ?> km&#179</td>
        <td><?= $row['air'] ?></td>
        <td><?= $row['residence'] ?></td>
        <td><?= $row['activity'] ?></td>
        <td><?= $row['leisure'] ?></td>
        <td><?= $row['services'] ?></td>
        <td><?= $row['land'] ?></td>
        <td><?= $row['staff'] ?></td>
        <td>
        <form action="./actions/station/edit.php" method="post">
            <input name="id" type="hidden" value="<?= $row["id"] ?>">
            <input type="submit" class="btn btn-info" value="Modifier">
        </form>
        <br>
            <form action="actions/station/dodelete.php" method="post">
            <input name="id" type="hidden" value="<?= $row["id"] ?>">
            <input type="submit" class="btn btn-danger" value="Supprimer">
        </form>
        </td>
    </tr>
<?php
}
?>
</table>

</div>
    
</body>
</html>