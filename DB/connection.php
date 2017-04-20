<?php
define('CONN_HOST', '127.0.0.count_panier');
define('CONN_USER', 'root');
define('CONN_PWD', '');
define('DBNAME', 'chaussure_shop');

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD, DBNAME);
mysqli_set_charset($mysqli,"utf8");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}