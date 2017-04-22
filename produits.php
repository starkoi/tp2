<?php
require_once('DB/connection.php');
var_dump($_GET);
require_once ('common/defines.php');
require_once ('views/page_top.php');
require_once('views/menu_panier.php');
$chaussures = get_chaussures_avec_cats();

?>
<main>

    <ul>
        <?php
        foreach ($chaussures as $id => $c){
            //var_dump($chaussures);
            $img = '<img src="'.$c["full_image_path"].'" alt= "image de chaussure"/>';
            var_dump($img);

            echo '<li class="chaussures">'.$c["marque"] .$c["nom"] . $img. $c["description"]. $c["prix"]. $c["pointure"].'</li>';
        }
        ?>
    </ul>
</main>
<?php require_once ('views/page_bottom.php') ?>