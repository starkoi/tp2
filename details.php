<?php
require_once ('common/defines.php');
require_once ('views/page_top.php');
require_once ('DB/connection.php');
$chaussures = get_chaussures();
?>
<main>
<ul>
    <?php
    foreach ($chaussures as $id => $c){
        echo '<li class="chaussures">'.$c["name"].'</li>';
    }
    ?>

</ul>
</main>
<?php require_once ('views/page_bottom.php') ?>
