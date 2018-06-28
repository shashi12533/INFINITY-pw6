<?php 
require_once "../back/includes/connection.php";
session_start ();

$ship = "SELECT `id`, `name`, `size`, `air`, `duration`, `spacing`, `connection`, `installations`, `link` FROM `ship`
";
$ship_stmt = $pdo->prepare($ship);
$ship_stmt->execute();

$station  = "SELECT `id`, `name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff`, `link` FROM `station`
";
$station_stmt = $pdo->prepare($station);
$station_stmt->execute();

$planets  = "SELECT `id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`, `link` FROM `planets`
";
$planets_stmt = $pdo->prepare($planets);
$planets_stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <title>Packs personnalisables - INFINITY</title>
</head>
<body>
    <section class="custom">
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="custom_title">PACKS PERSONNALISABLES</h1>
        <p class="custom_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime veritatis voluptate neque aperiam explicabo exercitationem culpa ea aut quis, at quisquam accusantium, voluptatibus aliquam rem. Modi tenetur aspernatur nobis voluptas.</p>
        <h3 class="custom_titlesection">Je choisis mon budget (par personne) :</h3>
        <div class="custom_buttonBox">
            <div class="custom_buttonBox_button">Budget 1</div>
            <div class="custom_buttonBox_button">Budget 2</div>
            <div class="custom_buttonBox_button">Budget 3</div>
        </div>
        <h3 class="custom_titlesection">Choissisez votre transport :</h3>
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
                    <h3 class="spaceships_packs_pack_content_title"><?= $row["name"] ?> :</h3>
                    <ul class="spaceships_packs_pack_content_list">
                        <li class="spaceships_packs_pack_content_item"><?= $row["duration"] ?></li>
                        <li class="spaceships_packs_pack_content_item"><?= $row["connection"] ?></li>
                        <li class="spaceships_packs_pack_content_item"> <?= $row["spacing"] ?></li>
                        <li class="spaceships_packs_pack_content_item"><?= $row["installations"] ?></li>
                    </ul>
                    <form action="spaceship.php?id=<?= $row["id"] ?>" method="post">
                        <input name="id" type="hidden" value="<?= $row["id"] ?>">
                        <div class="custom_packs_pack_content_linkBox">
                    <input type="submit" class="custom_packs_pack_content_link" value="Sélectionner">
                    <input type="submit" class="custom_packs_pack_content_link" value="En savoir +">
                            
                        </div>
                    </form>
                </div>
            </div>

            <?php
            }
            ?>
            
        </div>
        <h3 class="custom_titlesection">Choissisez votre planète :</h3>
        <div class="carousel planets_packs"
        data-flickity='{ "watchCSS": true }' >
        <?php
            while ($row = $planets_stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="carousel-cell planets_packs_pack">
                <div class="planets_packs_pack_imgBox">
                    <img src="<?= $row["link"] ?>" alt="<?= $row["name"] ?>" class="planets_packs_pack_img rotate">
                </div>
                <div class="planets_packs_pack_content">
                    <h3 class="planets_packs_pack_content_title"><?= $row["name"] ?> :</h3>
                    <ul class="planets_packs_pack_content_list">
                        <li class="planets_packs_pack_content_item"><?= $row["weather"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["air"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["wildlife"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["work"] ?></li>
                    </ul>
                    <form action="planet.php?id=<?= $row["id"] ?>" method="post">
                        <input name="id" type="hidden" value="<?= $row["id"] ?>">
                        <div class="custom_packs_pack_content_linkBox">
                        <input type="submit" class="custom_packs_pack_content_link" value="Sélectionner">
                        <input type="submit" class="custom_packs_pack_content_link" value="En savoir +">
                        </div>
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h3 class="custom_titlesection">Choissisez votre habitation :</h3>
        <div class="carousel spacemodules_packs"
        data-flickity='{ "watchCSS": true }' >
        <?php
            while ($row = $station_stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <div class="carousel-cell spacemodules_packs_pack">
                <div class="spacemodules_packs_pack_imgBox">
                    <img src="<?= $row["link"] ?>" alt="<?= $row["name"] ?>" class="spacemodules_packs_pack_img">
                </div>
                <div class="spacemodules_packs_pack_content">
                    <h3 class="spacemodules_packs_pack_content_title"><?= $row["name"] ?> :</h3>
                    <ul class="spacemodules_packs_pack_content_list">

                        <li class="spacemodules_packs_pack_content_item"><?= $row["residence"] ?></li>
                        <li class="spacemodules_packs_pack_content_item"><?= $row["services"] ?></li>
                        <li class="spacemodules_packs_pack_content_item"><?= $row["leisure"] ?>
                        </li>
                    </ul>
                    <div class="custom_packs_pack_content_linkBox">
                    <input type="submit" class="custom_packs_pack_content_link" value="Sélectionner">
                    <input type="submit" class="custom_packs_pack_content_link" value="En savoir +">
                            
                        </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
        <div class="custom_buttonBox">
            <p class="custom_price">999 € </p>
            <div class="custom_buttonBox_button hovered">Payer</div>
        </div>
        <img src="assets/images/planets/planete4.svg" alt="" class="custom_planet1">
        <img src="assets/images/planets/comet2.svg" alt="" class="custom_comet1">
        <p class="custom_goto">Découvrez aussi nos <a href="aiopacks.html" class="custom_goto_link">PACKS TOUT INCLUS</a> !</p>
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
            <a href="index.php" class="menu_nav_icon packsColored"></a>
            <a href="spaceships.php" class="menu_nav_icon"></a>
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