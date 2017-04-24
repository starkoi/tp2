<?php
$page_title = 'Page contact';
require_once ('common/defines.php');


$nom = "";
$prenom = "";
$sujet = "";
$courriel = "";
$erreur = "";

if (isset($_POST['lastname'])) {
    if (strlen(trim($_POST['lastname'])) < 1) {
        $erreur['lastname'] = ' le nom doit avoir minimum 1 caractère. ';
    } else {
        $nom =  $_POST['lastname'];
    }
}

if (isset($_POST['firstname'])) {
    if (strlen(trim($_POST['firstname'])) < 1) {
        $erreur['firstname'] = 'le prenom doit avoir minimum 1 caractère. ';
    } else {
        $prenom =  $_POST['firstname'];
    }
}
if (isset($_POST['sujet'])) {
    if (strlen(trim($_POST['sujet'])) == "") {
        $erreur['sujet'] = 'Veuillez choisir un sujet. ';
    } else {
        $sujet =  $_POST['sujet'];
    }
}
if (isset($_POST['courriel'])) {
    if (!filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL)) {
       $erreur['courriel'] = 'Veuillez entrer une adresse de courriel valide';
    } else {
        $courriel =  $_POST['courriel'];
    }
}
require_once ('views/page_top.php');
?>
<main>
    <h1>Contact</h1>
    <form method='post' action="contact.php">
        <fieldset id="client">
            <legend>Client</legend>
            <div id="all_in_form">
                <div>
                    <label for="lastname" class="text">Nom: (*)</label>
                    <input type="text" name="lastname" id="lastname" class="input" placeholder="Entrez votre nom" value="<?= $nom; ?>">
                    <p><?= ((isset($erreur['lastname']))?$erreur['lastname'] : "") ?></p>
                </div>
                <div>
                    <label for="firstname" class="text">Prenom: (*)</label>
                    <input type="text" name="firstname" id="firstname" class="input" placeholder="Entrez votre prénom" value="<?= $prenom; ?>">
                    <p><?= ((isset($erreur['firstname']))?$erreur['firstname'] : "") ?></p>
                </div>
                <div>
                    <label for="sujet" class="text">Sujet: (*)</label>
                    <select name="sujet" id="sujet">
                        <option <?= (($sujet == "") ? "selected='selected'" : "") ?> value="">Choisir...</option>
                        <option <?= (($sujet == "info") ? "selected='selected'" : "") ?> value="info">Info générale</option>
                        <option <?= (($sujet == "retour") ? "selected='selected'" : "") ?> value="retour">Retour</option>
                        <option <?= (($sujet == "plainte") ? "selected='selected'" : "") ?> value="plainte">Plainte</option>
                        <option <?= (($sujet == "contact") ? "selected='selected'" : "") ?> value="contact">Nous contacter</option>
                        <option <?= (($sujet == "autre") ? "selected='selected'" : "") ?> value="autre">Autre</option>
                    </select>
                    <p><?= ((isset($erreur['sujet']))?$erreur['sujet'] : "") ?></p>
                </div>
                <div>
                    <label for="comments" class="text" class="input">Message:</label>
                    <textarea name="comments" id="comments" rows="6" cols="62"></textarea>
                </div>
                <div class="inline">
                    <input type="checkbox" name="check" id="inscription" />
                    <label for="inscription">Je veux recevoir des nouvelles de "Chaussure-Shop".</label>
                </div>
                <div class="inline autre">
                    <input type="checkbox" name="check" id="legal" />
                    <label for="legal">J'accepte les conditions d'utilisations.</label>
                </div>
                <div>
                    <label for="courriel" class="text" class="input">Courriel (*)</label>
                    <input type="email" name="courriel" id="courriel" class="input" value="<?= $courriel; ?>">
                    <p><?= ((isset($erreur['courriel']))?$erreur['courriel'] : "") ?></p>
                </div>
                <div id="submit">
                    <input type='submit' value="Envoyer">
                </div>
            </div>
        </fieldset>
    </form>
</main>
<?php
require_once ('views/page_bottom.php');
?>