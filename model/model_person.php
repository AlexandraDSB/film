<?php
/**
 * Created by PhpStorm.
 * User: d15001012
 * Date: 13/11/2018
 * Time: 10:03
 */

require '../config.php';

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getReal($title) {
    $bdd = getBdd();

    $query = 'select* from PERSON p 
                JOIN movieHasPERSON mp ON p.ID = mp.IDPERSON 
                JOIN MOVIE m on mp.IDMOVIE= m.ID 
                JOIN personHasPICTURE pp ON p.ID = pp.IDPERSON 
                JOIN PICTURE pt on pp.IDPICTURE=pt.ID 
                WHERE m.TITLE=:title
                AND mp.ROLE = "REAL" 
              ';
    $person= $bdd->prepare($query);

    try {
        $queryParameters = [
            ':title' => $title,
        ];
        $person->execute($queryParameters);

    } catch (PDOException $e) {
        if (!$person) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
    }

    return $person;

}

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getPerson($id) {
    $bdd = getBdd();

    $query = 'select* from PERSON p 
                JOIN movieHasPERSON mp ON p.ID = mp.IDPERSON 
                JOIN MOVIE m on mp.IDMOVIE= m.ID 
                JOIN personHasPICTURE pp ON p.ID = pp.IDPERSON 
                JOIN PICTURE pt on pp.IDPICTURE=pt.ID 
                WHERE p.ID=:id
                AND mp.ROLE="ACTOR"
              ';
    $person= $bdd->prepare($query);

    try {
        $queryParameters = [
            ':id' => $id,
        ];
        $person->execute($queryParameters);

    } catch (PDOException $e) {
        if (!$person) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
    }

    return $person;

}

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getAllPerson($title) {
    $bdd = getBdd();

    $query = 'select* from PERSON p 
                JOIN movieHasPERSON mp ON p.ID = mp.IDPERSON 
                JOIN MOVIE m on mp.IDMOVIE= m.ID 
                JOIN personHasPICTURE pp ON p.ID = pp.IDPERSON 
                JOIN PICTURE pt on pp.IDPICTURE=pt.ID 
                WHERE m.TITLE=:title
                AND mp.ROLE="ACTOR"
              ';
    $person= $bdd->prepare($query);

    try {
        $queryParameters = [
            ':title' => $title,
            ];
        $person->execute($queryParameters);

    } catch (PDOException $e) {
        if (!$person) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
    }

    return $person;

}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
/*function getBdd() {
    $bdd= new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATEBASE,DB_USERNAME,DB_PASSWORD);
    return $bdd;
}*/


