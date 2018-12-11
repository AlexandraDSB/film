<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 11/12/2018
 * Time: 11:40
 */

 $titre = 'Mon Blog';
?>

<?php ob_start(); ?>
<?php foreach ($person as $p): ?>
    <article>
        <header>
            <h2><?=$p['FIRSTNAME']." ".$p['LASTNAME']?></h2>
            <time><?= $p['BIRTHDATE'] ?></time>
        </header>
        <img class ="actor" src="/filmTP<?= $p['PATH'] ?>" alt="<?= $p['LEGEND'] ?>">
        <p><?= $p['BIOGRAPHY'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit_person.php'; ?>

