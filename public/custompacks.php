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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="
		Créez un pack qui vous ressemble. Vous aurez le choix de la planète de destination, du transport pour votre transfert et enfin de l'habitat où vous vivrez. Combinez à votre envie.">
		<meta itemprop="name" content="INFINITY, ouvrez vous au futur">
		<meta itemprop="description" content="
		Créez un pack qui vous ressemble. Vous aurez le choix de la planète de destination, du transport pour votre transfert et enfin de l'habitat où vous vivrez. Combinez à votre envie.">
		<meta itemprop="image" content="https://image.noelshack.com/fichiers/2018/26/5/1530228048-capture-d-ecran-2018-06-29-a-01-20-29.png">
		<meta property="og:url" content="http://alexandredelaloy.com">
		<meta property="og:type" content="website">
		<meta property="og:title" content="INFINITY, ouvrez vous au futur">
		<meta property="og:description" content="
		Créez un pack qui vous ressemble. Vous aurez le choix de la planète de destination, du transport pour votre transfert et enfin de l'habitat où vous vivrez. Combinez à votre envie.">
		<meta property="og:image" content="https://image.noelshack.com/fichiers/2018/26/5/1530228048-capture-d-ecran-2018-06-29-a-01-20-29.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="INFINITY, ouvrez vous au futur">
		<meta name="twitter:description" content="
		Créez un pack qui vous ressemble. Vous aurez le choix de la planète de destination, du transport pour votre transfert et enfin de l'habitat où vous vivrez. Combinez à votre envie.">
		<meta name="twitter:image" content="https://image.noelshack.com/fichiers/2018/26/5/1530228048-capture-d-ecran-2018-06-29-a-01-20-29.png">
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
        <p class="custom_desc">Créez un pack qui <span class="ImStrong">vous ressemble</span>. Vous aurez le choix de la <span class="ImStrong">planète</span> de destination, du <span class="ImStrong">transport</span> pour votre transfert et enfin de <span class="ImStrong">l'habitat</span> où vous vivrez. <span class="ImStrong">Combinez à votre envie</span>.</p>
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
        <p class="custom_goto">Découvrez aussi nos <a href="aiopacks.php" class="custom_goto_link">PACKS TOUT INCLUS</a> !</p>
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
            <a href="index.php#packs" class="menu_nav_icon packsColored"></a>
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