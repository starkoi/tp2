<?php
$total = 0;
?>
<div>

    <?php
    foreach ($panier as $qte) {
        $total += $qte;
    }
    echo $total;
    ?>
</div>