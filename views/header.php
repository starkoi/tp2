<?php
    $total = 0;
    foreach ($panier as $qte) { $total += $qte; }
?>
<header>
    <div id="logo" class="img_header"><a href="index.php"></a></div>
    <?php require_once ('views/menu_principal.php')?>
    <div id="menu-secondaire">
        <div id="panier" class="img_header"><a href="panier.php"><div><?php echo $total; ?></div></a></div>
        <div id="user" class="img_header"><a href="conexion.php"></a></div>
        <div id="username"> <span><?= 'Bonjour ' . $_SESSION['username'] ?></span></div>
    </div>
</header>
