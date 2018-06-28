<?php 
require_once "../back/includes/connection.php";
session_start ();

$planets  = "SELECT `id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`, `link`, `airdesc`, `workdesc`, `weatherdesc`, `wildlifedesc` FROM `planets` WHERE id = $_GET[id]
";
$planets_stmt = $pdo->prepare($planets);
$planets_stmt->execute();

$row = $planets_stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <title>Planètes - Description</title>
</head>
<body>
    <section class="planet">
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="planet_title"><a href="" class="planet_title_link"></a><?= $row["name"] ?></h1>
        <div class="planet_menu">
            <div class="planet_menu_icon" id="pl-icon1"></div>
            <div class="planet_menu_icon" id="pl-icon2"></div>
            <div class="planet_menu_icon" id="pl-icon3"></div>
            <div class="planet_menu_icon" id="pl-icon4"></div>
        </div>
        <div class="planet_articles">
            <article class="planet_articles_article" id="desc1">
                <h2 class="planet_articles_article_title ">Climat : <?= $row["weather"] ?> </h2>
                <p class="planet_articles_article_text"><?= $row["weatherdesc"] ?></p>
            </article>
            <article class="planet_articles_article is-moved" id="desc2">
                <h2 class="planet_articles_article_title is-righted">Air ambiant : <?= $row["air"] ?></h2>
                <p class="planet_articles_article_text is-righted"><?= $row["airdesc"] ?></p>
            </article>
            <article class="planet_articles_article" id="desc3">
                <h2 class="planet_articles_article_title">Faune : <?= $row["wildlife"] ?></h2>
                <p class="planet_articles_article_text"><?= $row["wildlifedesc"] ?></p>
            </article>
            <article class="planet_articles_article is-moved" id="desc4">
                <h2 class="planet_articles_article_title is-righted">Travail et emploi : <?= $row["work"] ?></h2>
                <p class="planet_articles_article_text is-righted"><?= $row["workdesc"] ?></p>
            </article>
        </div>
        
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
            <a href="index.php" class="menu_nav_icon"></a>
            <a href="spaceships.php" class="menu_nav_icon"></a>
            <a href="planets.php" class="menu_nav_icon"></a>
            <a href="spacemodules.php" class="menu_nav_icon"></a>
        </nav>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</html>