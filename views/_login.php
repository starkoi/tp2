<?php

function user_authenticate($user, $pass) {
    $users = array(
        'Elorri' => 'elo123',
        'kevin' => 'kev456',
        'sonya' => 'son789',
        'carolina' => 'car123',
        'virginie' => 'vir456',
    );
    return array_key_exists($user, $users) && ($users[$user] == $pass);
}

/**
 * Indique que l'utilisateur est connecté (son username est en session et sa valeur n'est pas vide
 * @return bool
 */
function user_is_logged() {
    return array_key_exists('username', $_SESSION) && ( ! empty($_SESSION['username']));
}

$message_erreur = '';

//var_dump($_POST);
$username = '';
$password = '';
if (array_key_exists('login', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if ((strlen($username) > 0)
        && (strlen($password) > 0)
        && user_authenticate($username, $password)) { // Validation sommaire puis authentification
        // Utilisateur est authentifié
        $_SESSION['username'] = $username;
    } else{
        $message_erreur = "<p class='error_login'>Mot de passe ou nom d'utilisateur invalide</p>";
    }
} else if (user_is_logged() && array_key_exists('logout', $_POST)){ // Demande de déconnexion
    unset($_SESSION['username']); // Supprimer l'élément à la clef 'username' dans la session
    unset($_SESSION['panier']); //vide le panier au logout
}

