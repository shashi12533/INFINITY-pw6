<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <title>Starter-pack o/</title>
</head>
<body>
    <section class="sign">
        <section class="stars" id="scene"></section>
        <header class="sign_header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="sign_header_logo">
            <h1 class="sign_header_title"><a href="index.html">INFINITY</a></h1>
        </header>
        <form action="../back/actions/login/check.php" method="post" class="sign_form is-flex" id="signin">
            <label for="themail" class="sign_form_label" >Votre adresse mail :
                <input 
                id="themail"
                class="sign_form_input"  
                type="email"
                name="usr"
                placeholder="adresse.mail@box.com" required>
            </label>
            <label for="thepassword" class="sign_form_label" >Votre mot de passe :
                <input 
                id="thepassword" 
                class="sign_form_input" 
                type="password" 
                name="pwd"
                placeholder="Mot de passe" 
                required>
            </label>
            <p class="sign_form_text" >Vous n'avez pas de compte ?<a href="#" class="sign_form_text_link"> Inscrivez-vous !</a></p>
            <input type="submit" class="sign_form_submit" value="Se connecter"></input>
        </form>
        <form action="../back/actions/login/doadd.php" method="post" class="sign_form" id="signup">
            <label for="thelastname" class="sign_form_label" >Votre nom :
                <input id="thelastname" type="text" class="sign_form_input" placeholder="Nom" name="name" required>
            </label>
            <label for="thefirstname" class="sign_form_label" >Votre prénom :
                <input type="text" class="sign_form_input" placeholder="Prénom" name="surname" required>
            </label>
            
            <label for="themail" class="sign_form_label" >Votre adresse mail :
                <input 
                id="themail"
                class="sign_form_input"  
                type="email"
                name="mail"
                placeholder="mail@exemple.com" required>
            </label>
            <label for="thepassword" class="sign_form_label" >Votre mot de passe :
                <input 
                id="thepassword" 
                class="sign_form_input" 
                type="password" 
                name="pwd"
                placeholder="Mot de passe" 
                required>
            </label>
            <!-- <label for="theconfirmpassword" class="sign_form_label" >Confirmez votre mot de passe :
                <input 
                id="theconfirmpassword" 
                class="sign_form_input" 
                type="password" 
                name="signup_confirmpassword"
                placeholder="Mot de passe" 
                required>
            </label> -->
            
            <p class="sign_form_text" >Vous avez déjà un compte ?<a href="#" class="sign_form_text_link"> Se connecter !</a></p>
            <input type="submit" class="sign_form_submit" value="S'inscrire"></input>
        </form>
        <footer class="sign_footer">
            <p class="sign_footer_text">Retrouvez nous sur nos réseaux sociaux :</p>
            <nav class="sign_footer_social">
                <a href="" class="sign_footer_social_icon"></a>
                <a href=""  class="sign_footer_social_icon"></a>
                <a href=""  class="sign_footer_social_icon"></a>
            </nav>
            <p class="sign_footer_copyright">ⓒ Copyright 2018 - INFINITY </p>
        </footer>
    </section>
    <section class="backgroundSign">
        <img src="assets/images/planets/planete2.svg" alt="" class="backgroundSign_planet1">
        <img src="assets/images/planets/planete3.svg" alt="" class="backgroundSign_planet2">
        <img src="assets/images/planets/comet.svg" alt="" class="backgroundSign_comet">
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</html>