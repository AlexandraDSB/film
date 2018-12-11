<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 11/12/2018
 * Time: 09:04
 */
require '../config.php';

require '../model/model_movie.php';



$movie = getMovie($_GET['title']);

require '../model/model_person.php';

$real = getReal($_GET['title']);

$actor =getAllPerson($_GET['title']);

$pic = getPictureMovie($_GET['title']);

require '../vue/vue_film.php';