<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/master.min.css">
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
  <title>Formulaire de renseignements</title>
</head>

<body>
  <section class="userform">
    <section class="stars" id="scene"></section>
    <header class="header">
      <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
      <h1 class="header_title"><a href="index.html">INFINITY</a></h1>
    </header>
    <section class="userform_container">
      <section class="buy">
        <div class="buy_line"></div>
        <div class="buy_circles">
          <div class="buy_circles_content"></div>
          <div class="buy_circles_content_active"></div>
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
          <a href="buy.php" class="buy_return_link"><img src="assets/images/icons/menu/right-arrow.svg" alt="return" class="buy_return_img"></a>
        </div>
      </section>
      <h1 class="userform_title">Fiche de renseignements</h1>
      <div class="userform_container_first is-visible">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Votre nom :</label>
          <input class="userform_form_input" type="text" name="name" placeholder="Nom prénom" required></input><br>
          <label class="userform_form_label">Votre âge :</label>
          <input class="userform_form_input" type="number" name="âge" placeholder="Age" required></input><br>
          <label class="userform_form_label">Votre nationalité : </label>
          <input class="userform_form_input" type="text" name="nationalité" placeholder="Nationalité" required></input><br>
          <label class="userform_form_label">Votre taille :</label>
          <input class="userform_form_input" type="number" name="taille" placeholder="Taille (en cm)" required></input><br>
          <label class="userform_form_label">Votre poids :</label>
          <input class="userform_form_input" type="number" name="poids" placeholder="Poids (en kg)" required></input><br>
          <label class="userform_form_label">Allergies :</label>
          <input class="userform_form_input" type="text" name="allergie" placeholder="Allergies"></input><br>
          <label class="userform_form_label">Régime alimentaire </label>
          <input class="userform_form_input" type="text" name="régime alimentaire" placeholder="Régime alimentaire"></input><br>
          <a class="userform_form_next" id="next1" name="suivant" href="#">coucou</a>
        </form>
      </div>
      <div class="userform_container_second">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Maladie, infirmité :</label>
          <input class="userform_form_input" type="text" name="infirmity" placeholder="Infirmité"></input><br>
          <label class="userform_form_label">Traitement de fond:</label>
          <input class="userform_form_input" type="text" name="medication" placeholder="Traitement de fond"></input><br>
          <label class="userform_form_label">Problèmes respiratoires :</label>
          <input class="userform_form_input" type="text" name="respiratory" placeholder="Problèmes respiratoires"></input><br>
          <label class="userform_form_label">Maladie mentale :</label>
          <input class="userform_form_input" type="text" name="mental" placeholder="Maladie mentale"></input><br>
          <label class="userform_form_label">Maladie cardiaque :</label>
          <input class="userform_form_input" type="text" name="cardiac" placeholder="Maladie cardiaque"></input><br>
          <label class="userform_form_label">Vos phobies :</label>
          <input class="userform_form_input" type="text" name="fear" placeholder="phobies"></input><br>
          <label class="userform_form_label">Votre consommation d'alcool :</label>
          <select class="userform_form_select" name="alcohol" value="alcool" required>
          <option class="userform_form_option" value="never">Never</option>
          <option value="2times">2 fois par semaine</option>
          <option value="2times">4 fois par semain</option>
          <option value="everyday">Quotidiennement </option>
          <option value="2times">TOUT LE TEMPS (perfusion)</option>
        </select><br>
          <label class="userform_form_label">Votre consommation de substances :</label>
          <select class="userform_form_select" name="drug" value="drogues" required>
          <option value="never">Jamais</option>
          <option value="hard">Drogues dures</option>
          <option value="weed">Que de la WEED</option>
          <option value="toxico">Toxicoman</option>
          <option value="junky">Junky</option>
        </select><br>
        <a class="userform_form_next" id="next2" name="suivant" href="#">coucou</a>
        </form>
      </div>
      <div class="userform_container_third">
        <form class="userform_form" action="index.html" method="post">
          <label class="userform_form_label">Famille :</label>
          <input class="userform_form_input" type="text" name="family" placeholder="Membres" required></input><br>
          <label class="userform_form_label">Grossesse (si oui, le terme) :</label>
          <input class="userform_form_input" type="text" name="pregnant" placeholder="mois de grossesse"></input><br>
          <label class="userform_form_label">Votre profession :</label>
          <input class="userform_form_input" type="text" name="professional" placeholder="Profession" required></input><br>
          <label class="userform_form_label">Votre téléphone :</label>
          <input class="userform_form_input" type="phone" name="phone" placeholder="0X XX XX XX XX" required></input><br>
          <label class="userform_form_label">Votre mail :</label>
          <input class="userform_form_input" type="mail" name="mail" placeholder="mail@mail.com" required></input><br>
          <label class="userform_form_label">Votre adresse :</label>
          <input class="userform_form_input" type="text" name="address" placeholder="n° rue, ville, pays" required></input><br><br><br>
          <input class="userform_form_submit" type="submit" name="submit" value="Soumettre">
        </form>
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
      <a href="index.html" class="menu_nav_icon"></a>
      <a href="index.php#packs" class="menu_nav_icon"></a>
      <a href="spaceships.php" class="menu_nav_icon"></a>
      <a href="planets.php" class="menu_nav_icon"></a>
      <a href="spacemodules.php" class="menu_nav_icon"></a>
    </nav>
  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <!--Flickity.js-->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="js/app.min.js" charset="UTF-8"></script>

</body>

</html>
