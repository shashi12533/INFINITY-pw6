<?php 
require_once "../back/includes/connection.php";
session_start ();

$ship = "SELECT `id`, `name`, `size`, `air`, `duration`, `spacing`, `connection`, `installations`, `link` FROM `ship`
";
$ship_stmt = $pdo->prepare($ship);
$ship_stmt->execute();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Transports spatiaux - INFINITY</title>
</head>
<body>
    <section class="spaceships">
        
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="spaceships_title">Transports</h1>
        <p class="spaceships_desc">Ces transports imaginés, aménagés rien que pour ce <span class="ImStrong">transfert unique</span> ne feront peur à personne car nous vous garantissons à <span class="ImStrong">100% l’arrivée</span> à votre destination.<br>
        <span class="ImStrong">Jetez-y un oeil !</span></p>
        <div class="carousel spaceships_packs"
        data-flickity='{ "watchCSS": true }' >
    
        <?php
            while ($row = $ship_stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="carousel-cell spaceships_packs_pack">
                <div class="spaceships_packs_pack_imgBox">
                    <img src="<?= $row["link"] ?>" alt="<?= $row["name"] ?>" class="spaceships_packs_pack_img">
                </div>
                <div class="spaceships_packs_pack_content">
                    <h2 class="spaceships_packs_pack_content_title"><?= $row["name"] ?></h2>
                    <ul class="spaceships_packs_pack_content_list">
                        <li class="spaceships_packs_pack_content_item"><?= $row["duration"] ?></li>
                        <li class="spaceships_packs_pack_content_item"><?= $row["connection"] ?></li>
                        <li class="spaceships_packs_pack_content_item"> <?= $row["spacing"] ?></li>
                        <li class="spaceships_packs_pack_content_item"><?= $row["installations"] ?></li>
                    </ul>
                    <form action="spaceship.php?id=<?= $row["id"] ?>" method="post">
                        <input name="id" type="hidden" value="<?= $row["id"] ?>">
                        <div class="spaceships_packs_pack_content_linkBox">
                        <input type="submit" class="spaceships_packs_pack_content_link" value="En savoir +">
                        </div>
                    </form>
                </div>
            </div>

            <?php
            }
            ?>
            
        </div>
        <img src="assets/images/icons/menu/spaceship-anim.svg" alt="icône transports" class="spaceships_planet1"><img src="assets/images/planets/comet2.svg" alt="" class="spaceships_comet1">
        <p class="spaceships_desc"><em>"Un vaisseau est une maison errante, une auberge partout, un voyageur qui ne laisse pas de traces"</em>, <span class="ImStrong">Alcuin</span></p>
        <p class="spaceships_goto">Découvrez aussi nos <a href="custompacks.php" class="spaceships_goto_link">PACKS PERSONNALISABLES</a>, ainsi que nos <a href="aiopacks.php" class="spaceships_goto_link">PACKS TOUT INCLUS</a></p>
        <footer class="footer">
            <p class="footer_text">Retrouvez nous sur nos réseaux sociaux :</p>
            <nav class="footer_social">
                <a href="" class="footer_social_icon"></a>
                <a href=""  class="footer_social_icon"></a>
                <a href=""  class="footer_social_icon"></a>
            </nav>
            <p class="footer_copyright">ⓒ Copyright 2018 - INFINITY </p>
        </footer>

    </section>
    <section class="menu">
        <nav class="menu_nav">
            <a href="index.php" class="menu_nav_icon"></a>
            <a href="index.php#packs" class="menu_nav_icon "></a>
            <a href="spaceships.php" class="menu_nav_icon spaceshipColored"></a>
            <a href="planets.php" class="menu_nav_icon"></a>
            <a href="spacemodules.php" class="menu_nav_icon"></a>
        </nav>
    </section>
    <!--Parallax.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!--Flickity.js-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</html>