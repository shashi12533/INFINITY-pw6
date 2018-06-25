<!DOCTYPE html>
<?php
session_start ();
?>
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
        <?php
// On récupère nos variables de session
if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
    echo 'Votre login est '.$_SESSION['usr'].' et votre mot de passe est '.$_SESSION['pwd'].'et vous êtes un '.$_SESSION['id'];
    echo 'Bonjour '.$_SESSION['name']. $_SESSION['surname'].' voici votre photo de profil <img style="width: 80px; border-radius: 100px;" src="'.$_SESSION['img'].'"> et vous êtes un '.$_SESSION['type'];
	echo '<br />';

	// On affiche un lien pour fermer notre session
    echo '<a href="../../../back/actions/login/logout.php">Déconnection</a>';
    echo '<a href="../../../back/actions/login/edit.php">MODIFIER</a>';
}
else {
	echo "Veuillez vous connecter";
}
?>

    </section>
    <section class="fmenu">
        <nav class="fmenu_nav">
            <?php
            if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])) {
                ?>
                <a href="profile.php" class="fmenu_nav_icon_profile"><img style="width: 30px; border-radius: 100px;" src="<?= $_SESSION['img']?>" alt=""></a>
                <?php
            } else {
                ?>
                <a href="sign.php" class="fmenu_nav_icon signIcon"></a>
                <?php
            }
            ?>
            <a href="" class="fmenu_nav_icon"></a>
            <a href="" class="fmenu_nav_icon"></a>
            <a href="" class="fmenu_nav_icon"></a>
            <a href="" class="fmenu_nav_icon"></a>
            <?php
            if (isset($_SESSION['usr']) && isset($_SESSION['pwd']) && ($_SESSION['type'] == "A")) {
                ?>
                <a href="back/index.php" class="fmenu_nav_icon_admin">Administration</a>
                <?php
            } else {
            }
            ?>
        </nav>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/app.min.js" charset="UTF-8"></script>
</body>
</body>
</html>