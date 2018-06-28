<?php
require_once "../back/includes/connection.php";
session_start();
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
    <title>Packs tout inclus - INFINITY</title>
</head>
<body>
    <section class="aio">
        
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
        </header>
        <h1 class="aio_title">Packs tout inclus</h1>
        <p class="aio_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime veritatis voluptate neque aperiam explicabo exercitationem culpa ea aut quis, at quisquam accusantium, voluptatibus aliquam rem. Modi tenetur aspernatur nobis voluptas.</p>
        <div class="carousel aio_packs"
        data-flickity='{ "watchCSS": true }' >
            <div class="carousel-cell aio_packs_pack">
                <div class="aio_packs_pack_imgBox">
                    <img src="assets/images/pack_spacemodules/low2.jpg" class="aio_packs_pack_img">
                </div>
                <div class="aio_packs_pack_content">
                    <h2 class="aio_packs_pack_content_title">PACK ÉTOILE</h2>
                    <ul class="aio_packs_pack_content_list">
                        <li class="aio_packs_pack_content_item"> Exploria 2.0</li>
                        <li class="aio_packs_pack_content_item"> GraviPic</li>
                        <li class="aio_packs_pack_content_item"> Comète</li>
                    </ul>
                    <div class="aio_packs_pack_content_linkBox">
                            <a href="packdesc.html" class="aio_packs_pack_content_link">En savoir +</a>
                            <a href="userform.html" class="aio_packs_pack_content_link">Commander</a>
                        </div>
                </div>
            </div>
            <div class="carousel-cell aio_packs_pack">
                <div class="aio_packs_pack_imgBox">
                    <img src="assets/images/pack_spacemodules/middle1.jpg" class="aio_packs_pack_img">
                </div>
                <div class="aio_packs_pack_content">
                    <h2 class="aio_packs_pack_content_title">PACK NÉBULEUSE</h2>
                    <ul class="aio_packs_pack_content_list">
                        <li class="aio_packs_pack_content_item"> Aventura 1.0</li>
                        <li class="aio_packs_pack_content_item"> Enigma</li>
                        <li class="aio_packs_pack_content_item"> Météor</li>
                    </ul>
                    <div class="aio_packs_pack_content_linkBox">
                            <a href="packdesc.html" class="aio_packs_pack_content_link">En savoir +</a>
                            <a href="userform.html" class="aio_packs_pack_content_link">Commander</a>
                        </div>
                </div>
            </div>
            <div class="carousel-cell aio_packs_pack">
                <div class="aio_packs_pack_imgBox">
                    <img src="assets/images/pack_spacemodules/luxe1.jpg" class="aio_packs_pack_img">
                </div>
                <div class="aio_packs_pack_content">
                    <h2 class="aio_packs_pack_content_title">PACK VOIE LACTÉE</h2>
                    <ul class="aio_packs_pack_content_list">
                        <li class="aio_packs_pack_content_item"> Eternel 2.0</li>
                        <li class="aio_packs_pack_content_item"> Lumi</li>
                        <li class="aio_packs_pack_content_item"> Galaxia</li>
                    </ul>
                    <div class="aio_packs_pack_content_linkBox">
                        <a href="packdesc.html" class="aio_packs_pack_content_link">En savoir +</a>
                        <a href="userform.html" class="aio_packs_pack_content_link">Commander</a>
                    </div>
                </div>
            </div>
            
        </div>
        <img src="assets/images/planets/planeteAnneau3.svg" alt="" class="aio_planet1"><img src="assets/images/planets/comet2.svg" alt="" class="aio_comet1">
        <p class="aio_goto">Découvrez aussi nos <a href="custompacks.html" class="aio_goto_link">PACKS PERSONNALISABLES</a> !</p>
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