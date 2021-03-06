<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.min.css">
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
  <title>Achat terminé</title>
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
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content_active"></div>
      </div>
      <div class="buy_text">
        <p class="buy_text_content">Récapitulatif</p>
        <p class="buy_text_content">Informations</p>
        <p class="buy_text_content">Paiements</p>
        <p class="buy_text_content">Validation</p>
      </div>
      <div class="buy_return">
        <a href="payment.php" class="buy_return_link"><img src="assets/images/icons/menu/right-arrow.svg" alt="return" class="buy_return_img"></a>
      </div>
    </section>
    <section class="confirmation">
      <p class="confirmation_text">Nous vous remercions de votre achat. Un mail de confirmation vous a été envoyé par mail. Bon voyage !</p>
      <img src="assets/images/stats/rocket.svg" alt="rocket" class="confirmation_img">
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