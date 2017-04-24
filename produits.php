<?php
if  (array_key_exists('sexe',$_GET) && ($_GET['sexe']==0 ||($_GET['sexe']==1))){
    require_once('common/defines.php');
    require_once('views/page_top.php');

    $sexe = $_GET['sexe'];
    $cat_id = null;

    if  (array_key_exists('cat_id',$_GET) && categorie_exists($_GET['cat_id'])) {
        $cat_id = $_GET['cat_id'];
    }

    $chaussures = get_chaussures_avec_cats($cat_id, $sexe);

    ?>

    <main id="main_produits">
        <?php
        foreach ($chaussures as $id => $c){
            $img = '<a href="details.php?produit_id=' . $c['id']. '"><img src="'.$c["full_image_path"].'" alt= "image de chaussure"/></a>';

            echo    '<div class="chaussures">'.
               '<p>'. ucfirst( $c["marque"] ). ' ' .ucfirst($c["nom"]) . '</p>' .
                $img.
                '<p class="prix_chaussure">' . $c["prix"] . '</p>' .

                "<a href='?op=ajouter&itemid=".$id.((!is_null($sexe))?"&sexe=".$sexe : "")."' class='ajouter_panier'>Ajouter</a>".
                '</div>';
        }
        ?>
    </main>
    <?php require_once('views/page_bottom.php') ?>
    <?php
}else {
   header('Location: index.php');
}
?>