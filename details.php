<?php
require_once ('common/defines.php');
require_once ('views/page_top.php');

if (array_key_exists('produit_id',$_GET)&& ($_GET['produit_id'] !==null)) {
    $produit_id = $_GET['produit_id'];

    $chaussures = get_chaussures_avec_cats(null, null, $produit_id);
    $chaussure = $chaussures[$produit_id];


    ?>
    <main>
        <?php
        $img = '<img src="'.$chaussure["full_image_path"].'" alt= "image de chaussure"/>';

        echo    '<div class="chaussures">'.
            ucfirst($chaussure["marque"]) . ' ' . ucfirst($chaussure["nom"]) .
            $img.
            $chaussure["description"].
            $chaussure["prix"]. ' ' .
            $chaussure["pointure"].
            "<a href='?op=ajouter&itemid=".$produit_id."&produit_id=".$produit_id."'> Ajouter</a>".
            '</div>';
        ?>
    </main>
<?php
}else {
    header('Location: index.php');
}

?>

<?php require_once ('views/page_bottom.php') ?>
