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

<?php foreach ($real as $r): ?>
    <aside>
        <header>
            <h2>PRODUCER</h2>
            <p><?=$r['FIRSTNAME']." ".$r['LASTNAME']?></p>
            <time>Birth on <?= $r['BIRTHDATE'] ?></time>
        </header>
        <img class ="real" src="/filmTP<?= $r['PATH'] ?>" alt="<?= $r['LEGEND'] ?>">
    </aside>
<?php endforeach; ?>

<?php foreach ($movie as $m): ?>
    <article>
        <header>
            <h1 class="titreFilm"><?= $m['TITLE'] ?> </a></h1>

            <time><?= $m['RELEASEDATE'] ?></time>
        </header>
        <img class="small" src="/filmTP<?= $m['PATH'] ?>" alt="<?= $m['LEGEND'] ?>">
        <p><?= $m['SYNOPSIS'] ?></p>
    </article>
<?php endforeach; ?>

<?php foreach ($pic as $p): ?>
    <div class="gallery">
        <img class ="actor" src="/filmTP<?= $p['PATH'] ?>" alt="<?= $p['LEGEND'] ?>">
    </div>
<?php endforeach; ?>


<?php foreach ($actor as $a): ?>
    <div class="gallery">
        <img class ="actor" src="/filmTP<?= $a['PATH'] ?>" alt="<?= $a['LEGEND'] ?>">
        <h4><a  href="person.php?id=<?= $a['IDPERSON'] ?>"><?=$a['FIRSTNAME']." ".$a['LASTNAME']?></a></h4>
        <h5><?= $a['ROLE'] ?></h5>
    </div>
<?php endforeach; ?>




<br>
    <hr>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit_film.php'; ?>