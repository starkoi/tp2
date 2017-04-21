<?php

// Liste des articles
$articles = array(
    '1' => array(
        'name' => 'Bottes',
    ),
    '2' => array(
        'name' => 'Sandales',
    ),
    '3' => array(
        'name' => 'Sport',
    ),
    '4' => array(
        'name' => 'Chaussures',
    ),
);

session_start();
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
    $itemid = '';
    if (array_key_exists('itemid', $_GET) && array_key_exists($_GET['itemid'], $articles)) {
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
}
?>