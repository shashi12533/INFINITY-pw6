<!DOCTYPE html>
<?php
session_start ();
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/master.min.css">
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
        <title>INFINITY, ouvrez vous au future</title>
    </head>
<body>
    <section class="profile">
<header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <section class="stars" id="scene"></section>
        <?php
// On récupère nos variables de session
if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {
?>
        <div class="profile_main">
        <div class="profile_main_img_container">
        <img class="profile_main_img" src="<?= $_SESSION['img'] ?>">
        </div>
        <h1 class="profile_main_title">Bonjour, <?= $_SESSION['surname'] ?>. Bienvenue sur votre profil.</h1>
        </div>
        <div class="profile_informations">
            <p class="profile_informations_title-big">Voici vos informations : </p>
            <p class="profile_informations_title-small">Votre prénom : <?=$_SESSION['surname']?></p>
            <p class="profile_informations_title-small">Votre nom : <?=$_SESSION['name']?></p>
            <p class="profile_informations_title-small">Votre adresse mail : <?=$_SESSION['usr']?></p>

        </div>

	<!-- // On affiche un lien pour fermer notre session -->
<div class="profile_informations_link">
    <p class="profile_link">Vous décollez ? Pensez à vous<a class="profile_link_text" href="../../../back/actions/login/logout.php"> déconnecter</a>.</p>
	<p class="profile_link">Vous pouvez modifier votre profil<a class="profile_link_text" href="../../../back/actions/login/edit.php"> ici</a>.</p>
	</div>
    <?php
} else {
	?>
	    <div class="profile_main">
        <h1 class="profile_main_title">Veuillez vous connecter avant de continuer.</h1>
		</div>
		<div class="profile_main_error_container">
		<svg class="profile_main_error" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 2721.3 2721.3" style="enable-background:new 0 0 2721.3 2721.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:url(#SVGID_1_);}
	.st1{opacity:0.2;fill:url(#SVGID_2_);}
	.st2{fill:url(#SVGID_3_);}
	.st3{opacity:0.2;}
	.st4{fill:url(#SVGID_4_);}
	.st5{fill:#C1272D;}
	.st6{fill:none;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	.st7{fill:#534741;}
	.st8{fill:#CCCCCC;}
	.st9{fill:#C1272D;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	.st10{fill:#2B0068;stroke:#000000;stroke-width:4;stroke-miterlimit:10;}
	.st11{fill:#ADADAD;}
</style>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="443.7252" y1="1374.6467" x2="1209.6177" y2="2046.7565">
	<stop  offset="0" style="stop-color:#A400D4"/>
	<stop  offset="1" style="stop-color:#310055"/>
</linearGradient>
<circle class="st0" cx="787.2" cy="1676" r="440.3"/>
<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="410.5345" y1="1345.5201" x2="1250.4406" y2="2082.5806">
	<stop  offset="0" style="stop-color:#A400D4"/>
	<stop  offset="1" style="stop-color:#310055"/>
</linearGradient>
<circle class="st1" cx="787.2" cy="1676" r="482.8"/>
<g>
	
		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="1164.6124" y1="2085.1301" x2="2281.2046" y2="702.5433" gradientTransform="matrix(1 0 0 -1 0 2721.26)">
		<stop  offset="8.579870e-02" style="stop-color:#E6E6E6"/>
		<stop  offset="0.1563" style="stop-color:#D3D3D3"/>
		<stop  offset="0.2958" style="stop-color:#B3B3B3"/>
		<stop  offset="0.4133" style="stop-color:#A0A0A0"/>
		<stop  offset="0.494" style="stop-color:#999999"/>
		<stop  offset="0.6052" style="stop-color:#858585"/>
		<stop  offset="0.8317" style="stop-color:#515151"/>
		<stop  offset="0.9544" style="stop-color:#333333"/>
	</linearGradient>
	<circle class="st2" cx="1670.8" cy="1262.9" r="811.5"/>
</g>
<g class="st3">
	
		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="1135.0422" y1="2121.7444" x2="2316.8582" y2="658.3967" gradientTransform="matrix(1 0 0 -1 0 2721.26)">
		<stop  offset="8.579870e-02" style="stop-color:#E6E6E6"/>
		<stop  offset="0.1563" style="stop-color:#D3D3D3"/>
		<stop  offset="0.2958" style="stop-color:#B3B3B3"/>
		<stop  offset="0.4133" style="stop-color:#A0A0A0"/>
		<stop  offset="0.494" style="stop-color:#999999"/>
		<stop  offset="0.6052" style="stop-color:#858585"/>
		<stop  offset="0.8317" style="stop-color:#515151"/>
		<stop  offset="0.9544" style="stop-color:#333333"/>
	</linearGradient>
	<circle class="st4" cx="1670.8" cy="1262.9" r="858.9"/>
</g>
<g id="XMLID_3_">
	<g>
		<path class="st5" d="M945.5,661.2c-10.4-11.8-18.7-24.8-25-38.4c57.5,35.3,133.5,30.9,186.9-16c53.6-47.2,67.6-122.6,39.2-184.4
			c13.1,8,25.2,18.1,35.9,30.3c57.6,65.4,51.2,165.2-14.3,222.7C1102.7,733.1,1003,726.7,945.5,661.2z"/>
	</g>
	<g>
		<path class="st6" d="M1107.4,606.9c-53.3,46.9-129.4,51.3-186.9,16c6.2,13.6,14.6,26.5,25,38.4c57.6,65.4,157.3,71.8,222.7,14.3
			c65.4-57.6,71.8-157.3,14.3-222.7c-10.7-12.1-22.8-22.2-35.9-30.3C1175,484.2,1161,559.7,1107.4,606.9z"/>
	</g>
</g>
<g id="XMLID_2_">
	<g>
		
			<rect x="1043" y="556.1" transform="matrix(0.7509 -0.6604 0.6604 0.7509 -110.8838 856.2845)" class="st7" width="73.5" height="38.1"/>
	</g>
	<g>
		
			<rect x="1043" y="556.1" transform="matrix(0.7509 -0.6604 0.6604 0.7509 -110.8838 856.2845)" class="st6" width="73.5" height="38.1"/>
	</g>
</g>
<g>
	<g id="XMLID_5_">
		<g>
			<path class="st8" d="M1372.6,843.3C1372.6,843.3,1372.6,843.3,1372.6,843.3l-6.8-28.8c-4.6-17-10.5-35.2-17.8-53.8
				c-15.9-40.5-38.9-83.1-72.1-120.9c-4.3-4.9-8.7-9.6-13.2-14.2c-21.4-21.7-44.7-40-68.3-55.3c-25.1-16.3-50.5-29.2-74-39.3
				c-2.8,4.2-5.9,8.4-9.2,12.6c-5.5,7-11.8,13.9-18.6,20.8c-4,4-8.3,8-12.7,11.9c-4.4,3.8-8.8,7.4-13.2,10.9
				c-8.5,6.6-17.1,12.4-25.5,17.3c-3.7,2.2-7.5,4.2-11.1,6.1c7.2,25.1,17,52.5,30.3,80c12.3,25.3,27.6,50.8,46.6,74.7
				c3.6,4.5,7.3,9,11.2,13.4c32.3,36.7,70.4,64.4,107.5,85.2c0.7-0.5,1.3-1.1,2-1.6c24.7-19,65.9-31.5,112.5-31.5
				c0-6.9,10.3-12.9,25.8-16.3L1372.6,843.3z"/>
		</g>
		<g>
			<path class="st6" d="M1225.4,863.9c-37.1-20.8-75.2-48.5-107.5-85.2c-3.8-4.4-7.6-8.8-11.2-13.4c-19-23.9-34.3-49.4-46.6-74.7
				c-13.4-27.5-23.1-54.9-30.3-80c3.7-1.8,7.4-3.9,11.1-6.1c8.5-5,17-10.7,25.5-17.3c4.4-3.4,8.8-7,13.2-10.9
				c4.5-3.9,8.7-7.9,12.7-11.9c6.8-6.9,13.1-13.8,18.6-20.8c3.3-4.2,6.4-8.4,9.2-12.6c23.5,10.1,48.9,23,74,39.3
				c23.6,15.3,46.9,33.6,68.3,55.3c4.5,4.6,8.9,9.3,13.2,14.2c33.2,37.7,56.2,80.4,72.1,120.9c7.3,18.6,13.2,36.8,17.8,53.8"/>
			<path class="st6" d="M1365.7,814.5c-15.5,3.4-25.8,9.4-25.8,16.3c-46.6,0-87.7,12.4-112.5,31.5"/>
		</g>
	</g>
</g>
<g id="XMLID_4_">
	<g>
		<path class="st5" d="M1153.5,659c0,0-46.7-13.3-79.9-51s-40.4-85.8-40.4-85.8s46.7,13.3,79.9,51S1153.5,659,1153.5,659z"/>
	</g>
	<g>
		<path class="st6" d="M1073.6,608c-33.2-37.8-40.4-85.8-40.4-85.8s46.7,13.3,79.9,51s40.4,85.8,40.4,85.8S1106.8,645.8,1073.6,608z
			"/>
	</g>
</g>
<g id="XMLID_1_">
	<g>
		<path class="st5" d="M1365.7,814.5c-15.5,3.4-25.8,9.4-25.8,16.3c-46.6,0-87.7,12.4-112.5,31.5c5.7-26,19.5-50.5,41-69.4
			c23-20.2,51.1-30.8,79.5-32.2C1355.3,779.3,1361.1,797.5,1365.7,814.5z"/>
	</g>
	<g>
		<path class="st6" d="M1365.7,814.5c-15.5,3.4-25.8,9.4-25.8,16.3c-46.6,0-87.7,12.4-112.5,31.5c5.7-26,19.5-50.5,41-69.4
			c23-20.2,51.1-30.8,79.5-32.2C1355.3,779.3,1361.1,797.5,1365.7,814.5z"/>
	</g>
</g>
<line class="st6" x1="1153.6" y1="658.9" x2="1033.3" y2="522.1"/>
<circle class="st9" cx="1236.7" cy="753.4" r="32"/>
<circle class="st10" cx="1236.5" cy="753.6" r="22.1"/>
<path class="st6" d="M1340,830.8c-46.6,0-87.7,12.4-112.5,31.5c-0.7,0.5-1.4,1.1-2,1.6c-14.2,11.6-22.5,25.4-22.5,40.3"/>
<path class="st6" d="M1394.6,811.6c-10.6,0-20.5,1-28.8,2.9c0,0,0,0-0.1,0c-15.5,3.4-25.8,9.4-25.8,16.3"/>
<circle class="st11" cx="895.3" cy="410.4" r="15.9"/>
<circle class="st11" cx="936.3" cy="482.9" r="4.2"/>
<circle class="st11" cx="1092.2" cy="448.3" r="10"/>
<circle class="st11" cx="1006.5" cy="418.4" r="8"/>
<circle class="st11" cx="1025" cy="541.3" r="6"/>
<circle class="st11" cx="835.6" cy="490.9" r="12.2"/>
<circle class="st11" cx="906.2" cy="421.3" r="10.9"/>
<circle class="st11" cx="1107.7" cy="463.8" r="15.5"/>
<circle class="st11" cx="1011.2" cy="471.5" r="7.7"/>
<circle class="st11" cx="1022" cy="508.1" r="7.5"/>
<circle class="st11" cx="1126.7" cy="407.7" r="13.2"/>
<circle class="st11" cx="1009.6" cy="480.8" r="9.3"/>
</svg>
</div>
<?php
}
?>
    <section class="menu">
        <nav class="menu_nav">
            <?php
            if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {
                ?>
                <a href="profile.php" class="menu_nav_icon_profile"><img style="width: 50px; height; 50px; border-radius: 100px;" src="<?= $_SESSION['img']?>" alt=""></a>
                <?php
            } else {
                ?>
                <a href="sign.php" class="menu_nav_icon signIcon"></a>
                <?php
            }
            ?>
            <a href="" class="menu_nav_icon"></a>
            <a href="spaceships.php" class="menu_nav_icon"></a>
            <a href="planets.php" class="menu_nav_icon"></a>
            <a href="spacemodules.php" class="menu_nav_icon"></a>
            <?php
            if (isset($_SESSION['usr']) && isset($_SESSION['pwd']) && ($_SESSION['type'] == "A")) {
                ?>
                <a href="../back/index.php" class="menu_nav_icon_admin">Administration</a>
                <?php
            } else {
            }
            ?>
		</nav>
	</section>
		</section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</body>
</html>
