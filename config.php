<?php
/**
 * Created by PhpStorm.
 * User: d15001012
 * Date: 14/11/2018
 * Time: 09:22
 */

define ('DB_HOST','mysql-dos-santos.alwaysdata.net'); // chemain vers le serveur
define ('DB_DATEBASE','dos-santos_film');// bdd utilisé
define ('DB_USERNAME','144148_user2');// utilisateur
define('DB_PASSWORD','admin');//mot de passe de l'utilisateur
define('MODE_DBG',false);// pour le mode débeugage
define('SITE_URL','http://dos-santos.alwaysdata.net/filmTP/');


try {
    $dsn = 'mysql:host=localhost;dbname=DB_USERNAME;charset=utf8';
    $pdo = new PDO($dsn, 'DB_USERNAME', 'DB_PASSWORD');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    if ('MODE_DBG'== true){
        //echo $e;
    }
}