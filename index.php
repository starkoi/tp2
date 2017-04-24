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

                <div class="caption">
                    <h2 class="slider-title">Tibau Do Sul - Brésil</h2>
                    <p>Une côte exposée aux grandes houles de l’Atlantique.
                        Grâce à sa position houles de l’Atlantique. Nous sommes au "paradis des surfeurs". <a href="catalogue.html?forfid=1">En savoir plus</a> </p>
                </div>
            </li>

            <li>
                <img src="images/slider/slider1.jpg" title="" alt="">

                <div class="caption">
                    <h2 class="slider-title">Le Vauclin - Martinique</h2>
                    <p>Du site de Tartane, avec sa presqu’île exposée à la houle de l’Atlantique, aux plages du Sud entre Trabaud et le Diamand. <a href="catalogue.html?forfid=1">En savoir plus</a> </p>
                </div>
            </li>

            <li>
                <img src="images/slider/banner3.png" title="" alt="">

                <div class="caption">
                    <h2 class="slider-title">Chien de traineau Vanoise - France</h2>
                    <p>Dans un espace préservé immense, ce séjour est une invitation à découvrir une région authentique par le biais d’activités originales et variées... <a href="catalogue.html?forfid=3">En savoir plus</a> </p>
                </div>
            </li>

            <li>
                <img src="images/slider/banner2.jpg" title="" alt="">

                <div class="caption">
                    <h2 class="slider-title">La caravanne du Désert - Maroc</h2>
                    <p>Jadis les caravanes de dromadaires étaient le seul moyen de communication entre le Maghreb et l’Afrique noire. <a href="catalogue.html?forfid=4">En savoir plus</a>  </p>
                </div>
            </li>
        </ul>
        <!-- Sombras -->
        <div class="slider-shadow"></div>

        <!-- Controles de Navegacion -->
        <ul id="control-buttons" class="control-buttons"></ul>
    </section>

    <!-------------- Fin Carousel -------------->
    <h1><?php echo COMPANIE_NAME; ?></h1>
    <h2>Produits Vedettes</h2>

<?php
$chaussures = get_chaussures_promo_avec_cats();

foreach ($chaussures as $id => $c) {
    $img = '<a href="details.php?promotion=' . $c['promotion'] . '"><img src="' . $c["full_image_path"] . '" alt= "image de chaussure"/></a>';

    echo '<div class="chaussures">' .
        ucfirst($c["marque"]) . ' ' . ucfirst($c["nom"]) .
        $img .
        $c["prix"] . ' ' .
        "<a href='?op=ajouter&itemid=" . $id . "'>Ajouter</a>" .
        '</div>';
}
    ?>
    <!-------------- Fin Carousel -------------->
</main>
<?php
require_once ('views/page_bottom.php');
?>
