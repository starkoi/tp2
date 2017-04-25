<?php
require_once('common/defines.php');
require_once('views/page_top.php');
$sexe= (isset($_GET['sexe']) && ($_GET['sexe']==0 ||($_GET['sexe']==1)))? $_GET['sexe']: null;
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$produit_id = (isset($_GET['produit_id'])? $_GET['produit_id']: null);

$chaussures = get_chaussures_avec_cats(null,null,$produit_id);
$chaussure = $chaussures[$produit_id];
    ?>
    <main id="detail">
    <?php
    $img = '<img src="' . $chaussure["full_image_path"] . '" alt= "image de chaussure"/>';

    echo '<div class="chaussures">' .
    '<p>' . ucfirst($chaussure["marque"]) . ' ' . ucfirst($chaussure["nom"]) . '</p>'. $img  . $chaussure["description"] .  '<p class="prix_chaussure">' . $chaussure["prix"] . '</p>' .
            "<a class='ajouter_panier' href='?op=ajouter&itemid=".$produit_id."&produit_id=".$produit_id.'&sexe='.$chaussure['sexe'].((!is_null($cat_id))?"&cat_id=".$cat_id : "")."'> Ajouter</a>" .
            ' </div > ';
        ?>
    </main>
    <?php require_once ('views/page_bottom.php') ?>

