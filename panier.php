<?php
require_once ('common/defines.php');
require_once ('views/page_top.php');
?>
<main>
    <ul>
        <?php foreach ($panier as $id => $nb) { ?>
            <li><?=$articles[$id]['name']?> (<?=$nb?>)</li>
        <?php } ?>
    </ul>
</main>
<?php
require_once ('views/page_bottom.php');
?>
