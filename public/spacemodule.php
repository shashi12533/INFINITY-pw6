<?php
require_once "../back/includes/connection.php";
require_once "../back/includes/head.php";
$sql  = "SELECT `id`, `name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff`, `link`, `residencedesc`, `servicesdesc`, `activitydesc` FROM `station` WHERE `id` = $_GET[id];
";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <title>Habitations - Description</title>
</head>
<body>
    <section class="spacemodule">
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="spacemodule_title"><a href="" class="spacemodule_title_link"></a><?= $row["name"] ?></h1>
        <div class="spacemodule_menu">
            <div class="spacemodule_menu_icon" id="pl-icon1"></div>
            <div class="spacemodule_menu_icon" id="pl-icon2"></div>
            <div class="spacemodule_menu_icon" id="pl-icon3"></div>
            
        </div>
        <div class="spacemodule_articles">
            <article class="spacemodule_articles_article" id="desc1">
                <h2 class="spacemodule_articles_article_title ">Type d'habitation : <?= $row["residence"] ?></h2>
                <p class="spacemodule_articles_article_text"><?= $row["residencedesc"] ?></p>
            </article>
            <article class="spacemodule_articles_article is-moved" id="desc2">
                <h2 class="spacemodule_articles_article_title is-righted">Services publics : <?= $row["services"] ?></h2>
                <p class="spacemodule_articles_article_text is-righted"><?= $row["servicesdesc"] ?></p>
            </article>
            <article class="spacemodule_articles_article" id="desc3">
                <h2 class="spacemodule_articles_article_title">Activités proposées : <?= $row["activity"] ?></h2>
                <p class="spacemodule_articles_article_text"><?= $row["activitydesc"] ?></p>
            </article>
            <article class="spacemodule_articles_article is-moved" id="desc4">
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
            <a href="index.php#packs" class="menu_nav_icon"></a>
            <a href="spaceships.php" class="menu_nav_icon"></a>
            <a href="planets.php" class="menu_nav_icon"></a>
            <a href="spacemodules.php" class="menu_nav_icon"></a>
        </nav>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</html>