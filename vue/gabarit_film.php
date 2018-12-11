<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 11/12/2018
 * Time: 08:55
 */
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
</head>
<body>
<div id="global">
    <header>
        <a href="/filmTP/index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <main id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
    </main>
    <footer id="piedBlog">
        Blog réalisé avec  comme un mini mvc PHP, HTML5 et CSS.
    </footer>
</div> <!-- #global -->
</body>
</html>