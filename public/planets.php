<?php 
require_once "../back/includes/connection.php";
session_start ();

$planets  = "SELECT `id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`, `link` FROM `planets`
";
$planets_stmt = $pdo->prepare($planets);
$planets_stmt->execute();
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
    <title>Planètes - INFINITY</title>
</head>
<body>
    <section class="planets">
        
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.html">INFINITY</a></h1>
        </header>
        <h1 class="planets_title">Planètes</h1>
        <p class="planets_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime veritatis voluptate neque aperiam explicabo exercitationem culpa ea aut quis, at quisquam accusantium, voluptatibus aliquam rem. Modi tenetur aspernatur nobis voluptas.</p>
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
                    <h2 class="planets_packs_pack_content_title"><?= $row["name"] ?></h2>
                    <ul class="planets_packs_pack_content_list">
                        <li class="planets_packs_pack_content_item"><?= $row["weather"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["air"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["wildlife"] ?></li>
                        <li class="planets_packs_pack_content_item"><?= $row["work"] ?></li>
                    </ul>
                    <form action="planet.php?id=<?= $row["id"] ?>" method="post">
                        <input name="id" type="hidden" value="<?= $row["id"] ?>">
                        <div class="planets_packs_pack_content_linkBox">
                        <input type="submit" class="planets_packs_pack_content_link" value="En savoir +">
                        </div>
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <img src="assets/images/icons/menu/planet-anim.svg" alt="" class="planets_planet1"><img src="assets/images/planets/comet2.svg" alt="" class="planets_comet1">
        <p class="planets_goto">Découvrez aussi nos <a href="custompacks.html" class="planets_goto_link">PACKS PERSONNALISABLES</a>, ainsi que nos <a href="aiopacks.html" class="planets_goto_link">PACKS TOUT INCLUS</a></p>
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
            <a href="index.html" class="menu_nav_icon"></a>
            <a href="index.html" class="menu_nav_icon "></a>
            <a href="spaceships.html" class="menu_nav_icon "></a>
            <a href="planets.html" class="menu_nav_icon planetColored"></a>
            <a href="spacemodules.html" class="menu_nav_icon"></a>
        </nav>
    </section>
    <!--Parallax.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!--Flickity.js-->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</html>
