<?php
session_start();
define ('DB_HOST','mysql-dos-santos.alwaysdata.net'); // chemain vers le serveur
define ('DB_DATEBASE','dos-santos_bd_tp2');// bdd utilisé 
define ('DB_USERNAME','144148_user2');// utilisateur 
define('DB_PASSWORD','admin');//mot de passe de l'utilisateur 


$PDO_BDD= new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATEBASE,DB_USERNAME,DB_PASSWORD);




$stext_Req="SELECT UTI_LOGIN, UTI_MAIL, UTI_TEL, UTI_NOM, UTI_PRENOM FROM T_UTILISATEUR_UTI where UTI_LOGIN='love'";

$sResultat=$PDO_BDD->query($stext_Req);

echo $_SESSION["nom"];
	
	
	
?>


<html>
	<head>
		<meta charset="utf-8"/>	
	</head>
	<body>
		<div class="page">
			<div class="header">
				<?php
					echo $show ; 
				?>
				
				
			</div>
		</div>
		<div class="footer">

		&copy; Copyright 2017 ALEXANDRA DOS SANTOS BARROSO - Tous droits réservés
		</div>
	</body>
</html>