<?php


if ( session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Est-ce que j'ai une variable de session nommée 'panier' ?
// Non ? On la créée (initialisation à tableau vide)
if (!array_key_exists('panier', $_SESSION)) {
    $_SESSION['panier'] = array();
}
// Ici $_SESSION['panier'] existe TOUJOURS
$panier =& $_SESSION['panier']; // $panier est une référence (alias) sur $_SESSION['panier']

// Est-ce que j'ai une operation de panier en données GET ?
// Oui ? La réaliser



if (array_key_exists('op', $_GET)) {
    $liste_chaussures = get_chaussures(); //liste des chaussures
    $itemid = '';
    if (array_key_exists('itemid', $_GET) && array_key_exists($_GET['itemid'], $liste_chaussures)) {
        $itemid = $_GET['itemid'];
    }
    // ici itemid est supposé valide
    switch ($_GET['op']) {
        case 'ajouter':
            if ($itemid != '') { // N'ajouter que si l'id est valide
                if (array_key_exists($itemid, $panier)) { // Si l'item est dans le panier
                    $panier[$itemid]++;
                } else {
                    $panier[$itemid] = 1;
                }
            }
            break;
        case 'retirer':
            if (array_key_exists($itemid, $panier)) { // Si l'item est dans le panier
                $panier[$itemid]--; // Le décrémenter
                if ($panier[$itemid] <= 0) { // Si il vaut 0, le supprimer du panier
                    unset($panier[$itemid]); // Supression de l'item dans le panier
                }
            }
            break;
        case 'maz':
            if (array_key_exists($itemid, $panier)) { // Si l'item est dans le panier
                unset($panier[$itemid]); // Supression de l'item dans le panier
            }
            break;
        case 'vider':
            $panier = array(); // Remplacer le panier par un tableau vide
            break;
    }
    header('location:'.$_SERVER['PHP_SELF']. (isset($_GET['sexe'])? "?sexe=".$_GET['sexe']: ""));
}
foreach ($_POST as $item_name => $item_count) {
    if (0 === strpos($item_name, 'cart_item_')) {
        $item_id = substr($item_name, strrpos($item_name, '_') + 1);
        if ($item_count > 0) {
            $panier[$item_id] = $item_count;
        } else {
            unset($panier[$item_id]);
        }
    }
}
?>