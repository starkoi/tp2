<?php
require_once('common/defines.php');


if (array_key_exists('produit_id', $_GET) && ($_GET['produit_id'] !== null)) {
    require_once('views/page_top.php');
    $cat_id = null;
    $produit_id = $_GET['produit_id'];

    if  (array_key_exists('cat_id',$_GET) && categorie_exists($_GET['cat_id'])) {
        $cat_id = $_GET['cat_id'];
    }

    $chaussures = get_chaussures_avec_cats(null, null, $produit_id);
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

<?php
}else {
    header('Location:index.php');
}

?>


