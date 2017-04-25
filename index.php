<?php
$page_title = 'Page accueil';
require_once ('common/defines.php');
require_once ('views/page_top.php');

$promotion = '';
if (array_key_exists('promotion',$_GET)&& ($_GET['promotion'] !==null)) {
    $promotion = $_GET['promotion'];


}
?>
<main>
    <!-------------- Carousel -------------->

    <section id="slider" class="container">
        <ul class="slider-wrapper">
            <li class="current-slide">
                <img src="images/slider/slider2.jpg" title="" alt="">


            </li>

            <li>
                <img src="images/slider/slider1.jpg" title="" alt="">


            </li>

            <li>
                <img src="images/slider/banner3.png" title="" alt="">


            </li>

            <li>
                <img src="images/slider/banner2.jpg" title="" alt="">


            </li>
        </ul>
        <!-- ombre  -->
        <div class="slider-shadow"></div>

        <!-- controle nav slider -->
        <ul id="control-buttons" class="control-buttons"></ul>
    </section>

    <!-------------- Fin Carousel -------------->
    <div id="en_vedette">
    <h2>Nos produits en vedette</h2>

<?php
$chaussures = get_chaussures_promo_avec_cats();

foreach ($chaussures as $id => $c) {
    $img = '<img src="' . $c["full_image_path"] . '" alt= "image de chaussure"/>';


    echo '<div class="chaussures">' .
        '<a href="details.php?produit_id=' . $id . '">Details</a>'.
        '<p>' . ucfirst($c["marque"]) . ' ' . ucfirst($c["nom"]) . '</p>' .
        $img .
        '<p class="prix_chaussure">' . $c["prix"] . '</p>' .
        '</div>';
}
    ?>
    </div>
</main>
<?php
require_once ('views/page_bottom.php');
?>
