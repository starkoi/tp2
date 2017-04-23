<?php
require_once('DB/connection.php');
require_once ('common/defines.php');
require_once ('views/page_top.php');


$cat_id = (isset($_GET['cat_id'])? $_GET['cat_id']: null);
$sexe= (isset($_GET['sexe'])? $_GET['sexe']: null);

$chaussures = get_chaussures_avec_cats($cat_id, $sexe);

?>
<main id="main_produits">
    <?php
    foreach ($chaussures as $id => $c){
        //var_dump($chaussures);
        $img = '<img src="'.$c["full_image_path"].'" alt= "image de chaussure"/>';
       // var_dump($img);

        echo    '<div class="chaussures">'.
                    $c["marque"] .$c["nom"] .
                    $img. $c["description"].
                    $c["prix"].
                    $c["pointure"].
                    "<a href='?op=ajouter&itemid=".$id.((!is_null($sexe))?"&sexe=".$sexe : "")."'>Ajouter</a>".
                '</div>';
    }
    ?>
</main>
<?php require_once ('views/page_bottom.php') ?>