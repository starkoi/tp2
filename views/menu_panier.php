<?php
?>
<nav>
    <ul>
        <?php foreach ($articles as $id => $a) { ?>
    <li><a href="?op=ajouter&itemid=<?=$id?>">Ajouter <?=$articles[$id]['name']?></a></li>
    <li><a href="?op=retirer&itemid=<?=$id?>">Retirer un(e) <?=$articles[$id]['name']?></a></li>
    <li><a href="?op=maz&itemid=<?=$id?>">Retirer tous(tes) les <?=$articles[$id]['name']?></a></li>
<?php } ?>
</ul>
</nav>