<?php
    require_once('common/defines.php');
    require_once('views/page_top.php');
$sexe= (isset($_GET['sexe']) && ($_GET['sexe']==0 ||($_GET['sexe']==1)))? $_GET['sexe']: null;
$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$chaussures = get_chaussures_avec_cats($cat_id, $sexe);


    ?>

    <main id="main_produits">
        <?php
        foreach ($chaussures as $id => $c){
            $img = '<img src="'.$c["full_image_path"].'" alt= "image de chaussure"/>';

            echo    '<div class="chaussures">'.

               '<p>'. ucfirst( $c["marque"] ). ' ' .ucfirst($c["nom"]) . '</p>' .
                $img.
                '<p class="prix_chaussure">' . $c["prix"] . '</p>' .

                "<a href='?op=ajouter&itemid=".$id."&sexe=".$sexe.((!is_null($cat_id))?"&cat_id=".$cat_id : "")."' class='ajouter_panier'>Ajouter</a>". '<a class="detail_chaussure" href="details.php?produit_id=' . $c['id'].((!is_null($cat_id))?"&cat_id=".$cat_id : ""). '">Détails</a>'.
                '</div>';
        }
        ?>
    </main>
    <?php require_once('views/page_bottom.php') ?>
