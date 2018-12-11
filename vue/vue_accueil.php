<?php
/**
 * Created by PhpStorm.
 * User: d15001012
 * Date: 13/11/2018
 * Time: 10:08
 */
?>
<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>
<?php foreach ($movies as $movie): ?>
    <article>
        <header>
            <h1 class="titreFilm"><a href="controleur/movie.php?title=<?= $movie['TITLE'] ?>"><?= $movie['TITLE'] ?> </a></h1>

            <time><?= $movie['RELEASEDATE'] ?></time>
        </header>
        <img class="small" src="/filmTP<?= $movie['PATH'] ?>" alt="<?= $movie['LEGEND'] ?>">
        <p><?= $movie['SYNOPSIS'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

