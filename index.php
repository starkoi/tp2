<?php
$page_title = 'Page accueil';
require_once ('common/defines.php');
require_once ('views/page_top.php');
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
        <!-- Sombras -->
        <div class="slider-shadow"></div>

        <!-- Controles de Navegacion -->
        <ul id="control-buttons" class="control-buttons"></ul>
    </section>

    <!-------------- Fin Carousel -------------->
    <h1><?php echo COMPANIE_NAME; ?></h1>


</main>
<?php require_once ('views/page_bottom.php') ?>
