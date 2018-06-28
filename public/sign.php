<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png" />
    <title>Connexion | Inscription</title>
</head>
<body>
    <section class="sign">
        <section class="stars" id="scene"></section>
        <header class="header">
            <img src="assets/images/icons/logo.svg" alt="INFINITY Logo" class="header_logo">
            <h1 class="header_title"><a href="index.php">INFINITY</a></h1>
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
            <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'){ ?>
         <div style="color: red" class="sign_form_label">
             <strong>Houston, on a un problème...</strong> Le mail et/ou le mot de passe incorrects.
         </div>
    <?php } ?>

                <?php if(isset($_GET['msg']) && $_GET['msg'] == 'modified'){ ?>
         <div style="color: green" class="sign_form_label">
             <strong>Profile modifié !</strong> Veuillez vous reconnecter afin <br> que les changements prennent effet.
         </div>
    <?php } ?>

        <?php if(isset($_GET['msg']) && $_GET['msg'] == 'registered'){ ?>
         <div style="color: green" class="sign_form_label">
             <strong>Succès !</strong> Le compte a été créé. Merci !
         </div>
        <?php } unset($_GET['?msg']); ?>
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
            <label for="theconfirmpassword" class="sign_form_label" >Confirmez votre mot de passe :
                <input 
                id="theconfirmpassword" 
                class="sign_form_input" 
                type="password" 
                name="vpwd"
                placeholder="Mot de passe" 
                required>
            </label>
            
            <p class="sign_form_text" >Vous avez déjà un compte ?<a href="#" class="sign_form_text_link"> Se connecter !</a></p>
            <input type="submit" class="sign_form_submit" value="S'inscrire"></input>
        </form>

        <div class="alert alert-danger">
    <strong>Succès !</strong> L'objet a été supprimé.
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
    <section class="backgroundSign">
        <img src="assets/images/planets/planete2.svg" alt="" class="backgroundSign_planet1">
        <img src="assets/images/planets/planete3.svg" alt="" class="backgroundSign_planet2">
        <img src="assets/images/planets/comet.svg" alt="" class="backgroundSign_comet">
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