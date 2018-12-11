<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 11/12/2018
 * Time: 10:00
 */

require 'config.php';

require 'model/model_movie.php';

$movies = getAllMovies();

require 'vue/vue_accueil.php';