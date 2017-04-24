<?php
define('CONN_HOST', '127.0.0.1');
define('CONN_USER', 'root'); //s
define('CONN_PWD', ''); // 7e3ytuqev
define('DBNAME', 'chaussure_shop'); // sbouchar_chaussures-shop

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD, DBNAME);
mysqli_set_charset($mysqli,"utf8");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

function get_chaussures($where = '') {
    global $mysqli;
    $query_str = "SELECT * FROM chaussures " . $where; // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($chaussure_data  = $res->fetch_assoc()) {
            $result[$chaussure_data['id']] = $chaussure_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function get_chaussures_avec_cats($cat = null, $sexe = null, $id_chaussure = null) {
    global $mysqli;
    $query_str =    "SELECT ch.*, cat.id `cat_id`,cat.nom `cat_nom` ".
                    "FROM `chaussures` as ch, `categorie` as cat ".
                    "WHERE ".
                        "ch.categorie_id = cat.id ".
                        ((!is_null($cat))? "AND ch.categorie_id = ".$cat." " : "").
                        ((!is_null($sexe))? "AND ch.sexe = ".$sexe : "").
                        ((!is_null($id_chaussure))? "AND ch.id = ".$id_chaussure : ""); // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($chaussure_data  = $res->fetch_assoc()) {
            $full_image_path = get_full_image_path($chaussure_data);
            $chaussure_data["full_image_path"] = $full_image_path;
            $result[$chaussure_data['id']] = $chaussure_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function get_chaussures_promo_avec_cats() {
    global $mysqli;
    $query_str =    "SELECT ch.*, cat.id `cat_id`,cat.nom `cat_nom` ".
        "FROM `chaussures` as ch, `categorie` as cat ".
        "WHERE ".
        "ch.categorie_id = cat.id ".
        "AND ch.promotion = 1";

    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($chaussure_data  = $res->fetch_assoc()) {
            $full_image_path = get_full_image_path($chaussure_data);
            $chaussure_data["full_image_path"] = $full_image_path;
            $result[$chaussure_data['id']] = $chaussure_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function get_full_image_path($chaussure_data_param){
    $full_image_path= IMG_PATH.($chaussure_data_param["sexe"]?'hommes':'femmes')."/".$chaussure_data_param["cat_nom"]."/".$chaussure_data_param["fichier_img"];
    return $full_image_path;

}

function categorie_exists($id) {
    global $mysqli;
    $queryStr = "SELECT * FROM `categorie` WHERE `id` = " . $mysqli->real_escape_string($id);
    $categorie_found = $mysqli->query($queryStr);

    $categorie_exists_result = false;
    if ($categorie_found && ($categorie_found->num_rows > 0)) {
        $categorie_exists_result = true;
    };
    return $categorie_exists_result;
}
