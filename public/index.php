<?php
session_start ();
?>

<!DOCTYPE html>
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
    <section class="home">
        <section class="stars" id="scene"></section>
        <header class="home_header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="home_header_logo">
            <p class="home_header_text">
                Ouvrez vous<span class="home_header_span"> au futur, avec</span>
            </p>
            <h1 class="home_header_title">INFINITY</h1>

        </header>
        <img src="assets/images/planets/planeteAnneau1.svg" alt="" class="home_planet1">

        <div class="home_titleBox">
            <p class="home_titleBox_text">
                Ouvrez vous<span class="home_titleBox_span"> au futur, avec</span>
            </p>
            <h1 class="home_titleBox_title">INFINITY</h1>
        </div>
        <section class="home_who">
            <h2 class="home_who_title">Qui sommes-nous ?</h2>
            <p class="home_who_text"><em>"Vivre sur une autre planète ? Impossible !"</em><br><br>
            Voilà ce qu'on vous aurait dit il y a <span class="ImStrong">50 ans</span>. Mais grâce à l’avancement de la technologie, nous vous proposons maintenant <span class="ImStrong">l’impossible !</span><br>
            <span class="ImStrong">6 planètes habitables</span>, <span class="ImStrong">moyens de transports</span> et <span class="ImStrong">types d'habitations</span>, avec des conditions de vie adaptés selon votre <span class="ImStrong">profil</span>.<br><br>
            Nous vous accompagnons tout au long de l’organisation de votre voyage <span class="ImStrong">sans retour</span>. Vous aurez toutes les informations nécessaires pour vous préparer à votre <span class="ImStrong">nouveau</span> mode de vie, du renseignement jusqu’à l’achat de votre billet. C’est <span class="ImStrong">notre garantie</span>.<br><br>
            <span class="ImStrong">Attention</span> , le choix de quitter la planète Terre est un choix réfléchi car il sera impossible se faire <span class="ImStrong">marche arrière</span>.</p>
            <img src="assets/images/planets/planete3.svg" alt="" class="home_planet2">
        </section>
        <section class="home_packchoice" id="packs">
            <h2 class="home_packchoice_title"> Découvrez nos offres :</h2>
            <p class="home_packchoice_text">
            Préparez votre voyage en choisissant le pack de vos <span class="ImStrong">rêves</span> .Nous vous proposons <span class="ImStrong">deux</span> types de packs:
            <span class="aioColored">Tout inclus</span> ou <span class="customColored">personnalisable</span>.<br><br> 
            Dans le pack <span class="aioColored">tout inclus</span>, travaillé et réfléchi par <span class="ImStrong">notre équipe</span>, nous vous proposant un voyage programmé et optimisé pour votre classe sociale.<br><br> 
            Dans le pack <span class="customColored">personnalisable</span>, vous pouvez concevoir <span class="ImStrong">LE</span> pack qui vous correspond, en gérant le transport, les planètes et le type d'habitation.
            </p>
            <h3 class="home_packchoice_nav_title">Choisissez votre méthode :</h3>
            <nav class="home_packchoice_nav">
                <a href="aiopacks.html" class="home_packchoice_nav_link">Tout inclus</a>
                <a href="custompacks.html" class="home_packchoice_nav_link">personnalisable</a>
            </nav>
        </section>
        <p class="home_citation"><em>"Rejoignez INFINITY dépasser les limites du réel"</em></p>
        <section class="home_stats">
            <h2 class="home_stats_title">Quelques chiffres :</h2>
            <nav class="home_stats_nav">
                <article class="home_stats_nav_article">
                    <h4 class="home_stats_nav_article_title">28 680</h4>
                    <p class="home_stats_nav_article_subtitle">Futures habitants spatiaux nous font confiance</p>
                </article>
                <article class="home_stats_nav_article">
                    <h4 class="home_stats_nav_article_title">27</h4>
                    <p class="home_stats_nav_article_subtitle">Vaisseaux lancés dans l'espace en toute sécurité</p>
                </article>
                <article class="home_stats_nav_article">
                    <h4 class="home_stats_nav_article_title">5 780</h4>
                    <p class="home_stats_nav_article_subtitle">Familles déjà sur place pour un futur meilleur</p>
                </article>
                <article class="home_stats_nav_article">
                    <h4 class="home_stats_nav_article_title">5</h4>
                    <p class="home_stats_nav_article_subtitle">Planètes colonisées, et ce n'est que le début..</p>
                </article>
            </nav>
            <img src="assets/images/planets/planete2.svg" alt="" class="home_planet3">
            <img src="assets/images/planets/planete5.svg" alt="" class="home_planet4">
        </section>
        <section class="home_partners">
            <h3 class="home_partners_title">Nos partnenariats :</h3>
            <div class="home_partners_box">
                <img class="home_partners_box_img" src="assets/images/partners/nasa.svg">
                <img class="home_partners_box_img" src="assets/images/partners/thales.svg">
                <img class="home_partners_box_img" src="assets/images/partners/soylent.svg">
            </div>
        </section>
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
        <?php
            if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {
                ?>
                <a href="profile.php" class="menu_nav_icon_generated allo">
                    <img class="menu_nav_icon_generated_img" src="<?= $_SESSION['img']?>" alt="">
                </a>
                <?php
            } else {
                ?>
                <a href="sign.php" class="menu_nav_icon signIcon"></a>
                <?php
            }
            ?>            
            <a href="index.php#packs" class="menu_nav_icon"></a>
            <a href="spaceships.php" class="menu_nav_icon"></a>
            <a href="planets.php" class="menu_nav_icon"></a>
            <a href="spacemodules.php" class="menu_nav_icon"></a>
        </nav>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</body>
</html>
