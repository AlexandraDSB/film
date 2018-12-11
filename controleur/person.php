<?php
/**
 * Created by PhpStorm.
 * User: d15001012
 * Date: 13/11/2018
 * Time: 12:11
 */

require '../config.php';


require '../model/model_movie.php';

require '../model/model_person.php';

 //var_dump($_GET['title']);

 $person = getPerson($_GET['id']);

 require '../vue/vue_person.php';
