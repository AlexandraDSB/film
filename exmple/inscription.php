<?php
define ('DB_HOST','mysql-dos-santos.alwaysdata.net'); // chemain vers le serveur
define ('DB_DATEBASE','dos-santos_film');// bdd utilisé
define ('DB_USERNAME','144148_user2');// utilisateur 
define('DB_PASSWORD','admin');//mot de passe de l'utilisateur 

$PDO_BDD= new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATEBASE,DB_USERNAME,DB_PASSWORD);

		
		extract($_POST);
		
			if (isset($valider)) {
				
				if ($pass == $pass2)
				{
					$mdp = $pass;
				} else {
					header('location: inscription.php?error=not_equal');
				}	
				
				if (!empty($tel1))
				{
					$tel1 = $tel;
				}
				
				
				
				if ("SELECT UTI_LOGIN INTO T_UTILISATEUR_UTI WHERE UTI_LOGIN != '".$login."'")
				{
				//$PDO_BDD->exec( "INSERT INTO T_UTILISATEUR_UTI(UTI_LOGIN, UTI_PWD, UTI_MAIL, UTI_TEL, UTI_NOM, UTI_PRENOM) values ('machine', 'truc', 'lol', '05', 'max', 'trouduc')");
					 $PDO_BDD->exec( "INSERT INTO T_UTILISATEUR_UTI(UTI_LOGIN, UTI_PWD, UTI_MAIL, UTI_TEL, UTI_NOM, UTI_PRENOM) values ('".$login."', SHA1('".$pass."'), '".$mail."', '".$tel."', '".$nom."', '".$prenom."')");
					 header('location:authentification.php');
					 exit();
				}
				else 
				{	
					header('location: inscription.php?error=sameLog');
				}
				
			}



			
			
			
			
?>
<html>
<head>
<meta charset="utf-8"/>
	
</head>

<body>

<div class="page">
	<div class="header">
	
	</div>




	
		
</div>

</body>
<footer >
    &copy; Copyright 2017 ALEXANDRA DOS SANTOS BARROSO - Tous droits réservés
</footer>


</html>
