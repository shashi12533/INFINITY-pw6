<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.min.css">
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
  <title>Connexion / Inscription</title>
</head>

<body>
  <section class="default">
    <section class="stars" id="scene"></section>
    <header class="header">
      <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
      <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
    </header>

    <section class="buy">
      <div class="buy_line"></div>
      <div class="buy_circles">
        <div class="buy_circles_content_active"></div>
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content"></div>
      </div>
      <div class="buy_text">
        <p class="buy_text_content">Récapitulatif</p>
        <p class="buy_text_content">Informations</p>
        <p class="buy_text_content">Paiements</p>
        <p class="buy_text_content">Validation</p>
      </div>
      <div class="buy_return">
        <a href="javascript:history.back()" class="buy_return_link"><img src="assets/images/icons/menu/right-arrow.svg" alt="return" class="buy_return_img"></a>
      </div>
      <div class="buy_packs">
        <div class="buy_packs_first">
          <div class="buy_packs_imgContainer">
            <img src="assets/images/pack_spacemodules/low2.jpg" class="buy_packs_img">
          </div>
          <div class="buy_packs_content">
            <h2 class="buy_packs_content_title">PACK ÉTOILE</h2>
            <ul class="buy_packs_content_list">
              <li class="buy_packs_content_item"> Space ship low</li>
              <li class="buy_packs_content_item"> Planet low</li>
              <li class="buy_packs_content_item"> Module low</li>
              <li class="buy_packs_content_item_qtity"> Quantité : 2</li>
              <li class="buy_packs_content_item_price"> 900 € </li>
            </ul>
            <a href="" class="buy_packs_content_imgLink"><img class="buy_packs_content_img" src="assets/images/icons/garbage.png" alt="garbage"></a>
          </div>
        </div>
        <div class="buy_packs_first">
          <div class="buy_packs_imgContainer">
            <img src="assets/images/pack_spacemodules/middle1.jpg" class="buy_packs_img">
          </div>
          <div class="buy_packs_content">
            <h2 class="buy_packs_content_title">PACK NÉBULEUSE</h2>
            <ul class="buy_packs_content_list">
              <li class="buy_packs_content_item"> Space ship middle</li>
              <li class="buy_packs_content_item"> Planet middle</li>
              <li class="buy_packs_content_item"> Module middle</li>
              <li class="buy_packs_content_item_qtity"> Quantité : 1</li>
              <li class="buy_packs_content_item_price"> 2300 € </li>
            </ul>
            <a href="" class="buy_packs_content_imgLink"><img class="buy_packs_content_img" src="assets/images/icons/garbage.png" alt="garbage"></a>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer">
      <p class="footer_text">Retrouvez nous sur nos réseaux sociaux :</p>
      <nav class="footer_social">
        <a href="" class="footer_social_icon"></a>
        <a href="" class="footer_social_icon"></a>
        <a href="" class="footer_social_icon"></a>
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