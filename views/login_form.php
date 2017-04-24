<?php require_once ('_login.php') ?>

<h1>Page de conexion</h1>

<form method="post">

    <?php if ( ! user_is_logged() ) { ?>
        <div><label for="username">Identifiant : </label><input type="text" name="username" id="username"></div>
        <div><label for="password">Mot de passe : </label><input type="password" name="password" id="password"></div>
        <input type="submit" value="Connexion" name="login"/>
    <?php }else { ?>
        <span>(<?= $_SESSION['username'] ?>)</span>
        <div><input type="submit" value="Déconnexion" name="logout" /></div>
    <?php } ?>
</form>

