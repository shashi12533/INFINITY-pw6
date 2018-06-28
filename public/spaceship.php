<?php 
require_once "../back/includes/connection.php";
session_start ();

$ship = "SELECT `id`, `name`, `size`, `air`, `duration`, `spacing`, `connection`, `installations`, `link`, `durationdesc`, `connectiondesc`, `spacingdesc`, `installationsdesc` FROM `ship` WHERE `id`=$_GET[id]
";
$ship_stmt = $pdo->prepare($ship);
$ship_stmt->execute();

$row = $ship_stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <title>Transports - Description</title>
</head>
<body>
    <section class="spaceship">
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="spaceship_title"><a href="" class="spaceship_title_link"></a><?= $row["name"] ?></h1>
        <div class="spaceship_menu">
            <div class="spaceship_menu_icon" id="sh-icon1"></div>
            <div class="spaceship_menu_icon" id="sh-icon2"></div>
            <div class="spaceship_menu_icon" id="sh-icon3"></div>
            <div class="spaceship_menu_icon" id="sh-icon4"></div>
        </div>
        <div class="spaceship_articles">
            <article class="spaceship_articles_article" id="desc1">
                <h2 class="spaceship_articles_article_title ">Temps de trajet : <?= $row["duration"] ?></h2>
                <p class="spaceship_articles_article_text"><?= $row["durationdesc"] ?></p>
            </article>
            <article class="spaceship_articles_article is-moved" id="desc2">
                <h2 class="spaceship_articles_article_title is-righted">Connexion : <?= $row["connection"] ?></h2>
                <p class="spaceship_articles_article_text is-righted"><?= $row["connectiondesc"] ?></p>
            </article>
            <article class="spaceship_articles_article" id="desc3">
                <h2 class="spaceship_articles_article_title">Nombre de passagers : <?= $row["spacing"] ?></h2>
                <p class="spaceship_articles_article_text"><?= $row["spacingdesc"] ?></p>
            </article>
            <article class="spaceship_articles_article is-moved" id="desc4">
                <h2 class="spaceship_articles_article_title is-righted">Services à bord : <?= $row["installations"] ?></h2>
                <p class="spaceship_articles_article_text is-righted"><?= $row["installationsdesc"] ?></p>
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