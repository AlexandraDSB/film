<?php
/**
 * Created by PhpStorm.
 * User: d15001012
 * Date: 13/11/2018
 * Time: 10:03
 */



// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getAllMovies() {
    $bdd = getBdd();
    $movies = $bdd->query('select* from MOVIE m JOIN movieHasPICTURE mp on m.ID=mp.IDMOVIE join PICTURE p on mp.IDPICTURE= p.ID where mp.TYPE = "POSTER"');
    return $movies;
}

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getMovie($title) {
    $bdd = getBdd();
    $query = 'select* from MOVIE m 
            JOIN movieHasPICTURE mp on m.ID=mp.IDMOVIE 
            join PICTURE p on mp.IDPICTURE= p.ID 
            where mp.TYPE = "POSTER" 
            and m.TITLE=:title';
    $movie= $bdd->prepare($query);

    try {
        $queryParameters = [
            ':title' => $title,
        ];
        $movie->execute($queryParameters);

    } catch (PDOException $e) {
        if (!$movie) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
    }
    return $movie;
}

//galery picture movie
function getPictureMovie($title) {
    $bdd = getBdd();
    $query = 'select* from PICTURE p
            JOIN movieHasPICTURE mp on p.ID=mp.IDMOVIE 
            join MOVIE m on mp.IDPICTURE= m.ID 
            where mp.TYPE = "POSTER" 
            and m.TITLE=:title';
    $pic= $bdd->prepare($query);

    try {
        $queryParameters = [
            ':title' => $title,
        ];
        $pic->execute($queryParameters);

    } catch (PDOException $e) {
        if (!$pic) {
            echo "\nPDO::errorInfo():\n";
            print_r($bdd->errorInfo());
        }
    }
    return $pic;
}


// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {

    $bdd= new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATEBASE,DB_USERNAME,DB_PASSWORD);

    if($bdd == false){
        echo 'errue de requette';
    }
    else{
        return $bdd;
    }

}


