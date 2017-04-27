<?php require_once ('_login.php');

?>

<h1>Page de conexion</h1>

<form method="post">

    <?php if ( ! user_is_logged() ) { ?>
        <div><label for="username">Identifiant : </label><input type="text" name="username" id="username"></div>
        <div><label for="password">Mot de passe : </label><input type="password" name="password" id="password"></div>

        <?= $message_erreur ?>

        <input type="submit" value="Connexion" name="login"/>
        <?php }else { ?>
        <span><?= 'Bonjour ' . $_SESSION['username'] . '. Pour vous deconnecter, appuyez sur le bouton ci-dessous. A bientôt !' ?></span>
        <div><input type="submit" value="Déconnexion" name="logout" /></div>
    <?php } ?>
</form>

