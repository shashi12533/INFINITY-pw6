<?php
session_start ();
?>

<?php
require_once "../../includes/connection.php";
require_once "../../includes/head.php";
$sql  = "SELECT `id`, `usr`, `pwd`, `name`, `surname`, `type`, `img` FROM `login` WHERE `id` = $_SESSION[id];
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  ?>


  <?php
  $row = $stmt->fetch(PDO::FETCH_ASSOC)
  ?>

  <a href="#">
<svg style="width: 70px; position: fixed; top: 20px; left: 20px;"version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 2721.3 2721.3" style="enable-background:new 0 0 2721.3 2721.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:url(#SVGID_1_);}
	.st1{opacity:0.3;fill:url(#SVGID_2_);}
	.st2{opacity:0.2;fill:url(#SVGID_3_);}
	.st3{fill:url(#SVGID_4_);}
</style>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="751.3185" y1="704.3696" x2="1967.183" y2="2016.4041">
	<stop  offset="0" style="stop-color:#FFB689"/>
	<stop  offset="0.3191" style="stop-color:#F05088"/>
	<stop  offset="0.6447" style="stop-color:#5D2369"/>
	<stop  offset="0.9988" style="stop-color:#423471"/>
</linearGradient>
<circle class="st0" cx="1359.3" cy="1360.4" r="894.4"/>
<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="728.9704" y1="680.1191" x2="1989.6942" y2="2040.5612">
	<stop  offset="0" style="stop-color:#FFB689"/>
	<stop  offset="0.3191" style="stop-color:#F05088"/>
	<stop  offset="0.6447" style="stop-color:#5D2369"/>
	<stop  offset="0.9988" style="stop-color:#423471"/>
</linearGradient>
<circle class="st1" cx="1359.3" cy="1360.3" r="927.4"/>
<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="848.6746" y1="727.7274" x2="1521.6582" y2="2001.0708" gradientTransform="matrix(0.9661 -0.2582 0.2582 0.9661 -130.8371 382.0596)">
	<stop  offset="0" style="stop-color:#F05088"/>
	<stop  offset="0.1601" style="stop-color:#BE417D"/>
	<stop  offset="0.3971" style="stop-color:#782B6F"/>
	<stop  offset="0.508" style="stop-color:#5D2369"/>
	<stop  offset="0.8173" style="stop-color:#C7837E"/>
	<stop  offset="0.9957" style="stop-color:#FFB689"/>
</linearGradient>
<path class="st2" d="M2709.6,1039.5c-25.4-94-184.2-134.3-472-120c-31.6,1.6-64.4,3.8-98.1,6.7c12.8,21.6,24.7,43.8,35.8,66.5
	c22.4-1.7,44.4-3,65.9-4.1c35.3-1.8,68.9-2.6,100.6-2.6c78.1,0,144.4,5.3,194.9,15.8c60.9,12.6,99.3,32.9,105.4,55.6
	c6.2,22.7-16.9,59.2-63.3,100.1c-54,47.7-140.2,102-249.4,157c-21.7,10.9-44.1,21.9-67.3,32.7c-223.8,105.1-514.9,207-829.8,290.2
	c-311.3,82.2-612,137.1-857.4,156.8c-28.4,2.3-56.1,4.1-83,5.4c-122.4,6.1-224.5,1.6-295.4-13.1c-60.9-12.6-99.3-32.9-105.4-55.6
	c-6.1-22.7,16.9-59.2,63.3-100.1c54-47.7,140.2-102,249.4-157c21.6-10.9,43.8-21.7,66.9-32.5c-1.7-22.1-2.5-44.4-2.5-66.9
	c0-2.8,0-5.5,0-8.3c-33.5,15.3-65.6,30.7-96.2,46.1C115.1,1541.6-2.1,1654.8,23.3,1748.8c22.1,81.6,144.8,122.8,365.3,122.8
	c33.3,0,68.9-1,106.7-2.9c38.3-1.9,78.1-4.8,119.3-8.6c243.1-22.3,534.7-76.5,835.7-156c304.5-80.4,587.5-178.4,810.7-280.2
	c34.9-15.9,68.3-31.9,100.1-47.9C2617.8,1246.8,2735,1133.5,2709.6,1039.5z"/>
<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="850.297" y1="708.3423" x2="1519.645" y2="1974.807" gradientTransform="matrix(0.9661 -0.2582 0.2582 0.9661 -130.8371 382.0596)">
	<stop  offset="0" style="stop-color:#F05088"/>
	<stop  offset="0.1601" style="stop-color:#BE417D"/>
	<stop  offset="0.3971" style="stop-color:#782B6F"/>
	<stop  offset="0.508" style="stop-color:#5D2369"/>
	<stop  offset="0.8173" style="stop-color:#C7837E"/>
	<stop  offset="0.9957" style="stop-color:#FFB689"/>
</linearGradient>
<path class="st3" d="M2697.4,1017.5c-25.3-94-183.4-134.3-469.9-120c-31.5,1.6-64.1,3.8-97.7,6.7c12.8,21.6,24.6,43.8,35.6,66.5
	c22.3-1.7,44.2-3,65.6-4.1c35.2-1.8,68.6-2.6,100.1-2.6c77.8,0,143.7,5.3,194,15.8c60.6,12.6,98.8,32.9,105,55.6
	c6.1,22.7-16.9,59.2-63,100.1c-53.8,47.7-139.6,102-248.2,157c-21.6,10.9-43.9,21.9-67,32.7c-222.8,105.1-512.6,207-826,290.2
	c-309.9,82.2-609.2,137.1-853.6,156.8c-28.3,2.3-55.9,4.1-82.7,5.4c-121.8,6.1-223.5,1.6-294.1-13.1c-60.6-12.6-98.8-32.9-105-55.6
	c-6.1-22.7,16.9-59.2,63-100.1c53.8-47.7,139.6-102,248.2-157c21.5-10.9,43.6-21.7,66.6-32.5c-1.7-22.1-2.5-44.4-2.5-66.9
	c0-2.8,0-5.5,0-8.3c-33.3,15.3-65.3,30.7-95.8,46.1C114.7,1519.6-2.1,1632.8,23.3,1726.8c22,81.6,144.2,122.8,363.6,122.8
	c33.2,0,68.6-1,106.3-2.9c38.1-1.9,77.7-4.8,118.8-8.6c242-22.3,532.3-76.5,831.9-156c303.1-80.4,584.9-178.4,807-280.2
	c34.7-15.9,68-31.9,99.6-47.9C2606.1,1224.8,2722.8,1111.5,2697.4,1017.5z"/>
</svg>
</a>

  <div class="container">
    <div class="card mt-5">
      <div class="card-body">

  <form method="post" action="./doedit.php">
<div class="form-group">
    <label style="font-size: 24px">Modifier le profil de <?= $row["surname"] ?> : </label><br><br>
    <label style="width: 100px;">Username : </label>
    <p>Pour des raisons de sécurité, le mail ne peut être changé.</p><br>
    <label style="width: 150px;">Mot de passe : </label>
    <p>Pour des raisons de sécurité, le mot de passe ne peut être changé.</p><br>
    <label style="width: 100px;">Nom : </label>
    <input placeholder="Air" value="<?= $row["name"] ?>" type="text" name="name"></input><br>
    <label style="width: 100px;">Prénom : </label>
    <input placeholder="Wildlife" value="<?= $row["surname"] ?>" type="text" name="surname"></input><br>
    <label style="width: 100px;">Image : </label>
	<input placeholder="http://image.png" value="<?= $row["img"] ?>" type="link" name="img"></input> <img style=" background: #000; width: 100px; border-radius: 100px;" src="<?= $row["img"] ?>" alt="<?= $row["surname"]?>"><br><br><br>
</div>
<a href="../../index.php#planet" class="btn btn-danger">Annuler</a>
            <!-- Sending all the modifications to the doedit.php file -->
<button onclick="return confirm('Voulez-vous vraiment ajouter ceci ?')" type="submit" class="btn btn-info">Modifier</button>
</form>
</div>
</div>
</div>
</body>
</html>