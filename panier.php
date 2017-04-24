<?php
require_once ('common/defines.php');
require_once ('views/page_top.php');


?>

<main id="main_panier">
    <h1>Panier</h1>
    <form method="post">
        <table border="0" cellpadding="0" cellspacing="0">
            <?php foreach ($panier as $id => $nb) {
                $detail_chaussure = get_chaussures_avec_cats(null,null, $id);
               // $detail_chaussure[$id];
                $img_chaussure = get_full_image_path($detail_chaussure[$id]);
                $item_name = 'cart_item_' . $id;
                ?>
            <tr>
                <td class="img_container">
                    <img src="<?php echo $img_chaussure; ?>" alt="">
                </td>
                <td>
                    <label for=<?= $item_name ?>>
                        <strong><?= ucfirst($detail_chaussure[$id]['nom']); ?></strong>
                        (<?= ucfirst($detail_chaussure[$id]['marque']); ?>)
                    </label>
                </td>
                <td>
                    <?= $detail_chaussure[$id]['prix']; ?>
                </td>
                <td>
                    <input type="number" name="<?= $item_name ?>" min="0" value="<?= $nb ?>">
                </td>
                <td>
                    <a href='?op=maz&itemid=<?= $id ?>' class="btn_retirer">X</a>
                </td>
            </tr>
            <?php } ?>

        </table>
        <?php if (count($panier) > 0){
            echo '<input type="submit" name="update" value="Mettre à jour">' .
            '<input type="button" value="Vider le panier" onclick="document.location=\'?op=vider\'">'.
            '<a href="#"">Acheter</a>' ;
        } else {
            echo "<h2>Votre panier est vide!</h2>";
        }
        ?>

    </form>
</main>
<?php
require_once ('views/page_bottom.php');
?>
