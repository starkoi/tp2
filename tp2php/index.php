<?php
$page_title = 'Page accueil';
require_once ('common/defines.php');
require_once ('views/page_top.php');


?>
<main>
    <div id="slider">
        <img src="images/slider.png" alt="image de promotion"/>
    </div>
    <section>
        <div id="type1">
            <ul>
                <li>Television</li>
                <li>Apareils photo</li>
                <li>Telephones</li>
                <li>Ecouteurs</li>
            </ul>
        </div>
        <div id="type2">
            <ul>
                <li>Jeux video</li>
                <li>Drones</li>
                <li>Ecouteurs</li>
                <li>Instruments de musique</li>
            </ul>
        </div>
    </section>
</main>
<?php require_once ('views/page_bottom.php') ?>
