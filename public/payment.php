<!DOCTYPE html>
<html lang="en">

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
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content"></div>
        <div class="buy_circles_content_active"></div>
        <div class="buy_circles_content"></div>
      </div>
      <div class="buy_text">
        <p class="buy_text_content">Récapitulatif</p>
        <p class="buy_text_content">Informations</p>
        <p class="buy_text_content">Paiements</p>
        <p class="buy_text_content">Validation</p>
      </div>
      <div class="buy_return">
        <a href="userform.php" class="buy_return_link"><img src="assets/images/icons/menu/right-arrow.svg" alt="return" class="buy_return_img"></a>
      </div>
    </section>
    <section class="payment">

      <form action="" class="payment_form">
        <h2 class="payment_title">Adresse de facturation</h2>
        <label for="" class="payment_form_label">
          Votre prénom :
          <input type="text" class="payment_form_input" placeholder="Votre pénom">
        </label>
        <label for="" class="payment_form_label">
          Votre nom :
          <input type="text" class="payment_form_input" placeholder="Votre nom">
        </label>
        <label for="" class="payment_form_label">
          Adresse mail :
          <input type="mail" class="payment_form_input" placeholder="Votre mail">
        </label>
        <label for="" class="payment_form_label">
          Numero de téléphone :
          <input type="phone" class="payment_form_input" placeholder="Votre telephone">
        </label>
        <label for="" class="payment_form_label">
          Adresse postale :
          <input type="text" class="payment_form_input" placeholder="Votre adresse postale">
        </label>
        <label for="" class="payment_form_label">
          Code postal :
          <input type="text" class="payment_form_input" placeholder="code postal">
        </label>
        <label for="" class="payment_form_label">
          Ville :
          <input type="text" class="payment_form_input" placeholder="ville">
        </label>
        <label for="" class="payment_form_label">
          Pays :
          <input type="text" class="payment_form_input" placeholder="pays">
        </label>
      </form>

      <form action="" class="payment_form">
        <h2 class="payment_title">Ajouter une nouvelle carte</h2>
        <label for="" class="payment_form_label">
          Nom sur la carte :
          <input type="text" class="payment_form_input" placeholder="Nom sur la carte">
        </label>
        <label for="" class="payment_form_label">
          Numero sur la carte :
          <input type="text" class="payment_form_input" placeholder="Numero sur la carte">
        </label>
        <label for="" class="payment_form_label">
          Date de validité :
          <input type="date" class="payment_form_input" placeholder="Date de validité">
        </label>
        <label for="" class="payment_form_label">
          Cryptogramme :
          <input type="number" class="payment_form_input" placeholder="Cryptogramme">
        </label>
        <p class="payment_text">TOTAL (TVA INCLUSE) : 999€</p>
        <input type="submit" class="payment_form_submit" placeholder="Confirmer & payer">
      </form>

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