<?php
session_start();
define ('DB_HOST','mysql-dos-santos.alwaysdata.net'); // chemain vers le serveur
define ('DB_DATEBASE','dos-santos_bd_tp2');// bdd utilisé 
define ('DB_USERNAME','144148_user2');// utilisateur 
define('DB_PASSWORD','admin');//mot de passe de l'utilisateur 

$PDO_BDD= new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATEBASE,DB_USERNAME,DB_PASSWORD);

extract($_POST);

	if (isset($_POST['valider'])) 
	{
		$req_nom=$PDO_BDD->exec("SELECT UTI_LOGIN from T_UTILISATEUR_UTI WHERE UTI_LOGIN = '$_POST[login]'");
		$req_pw=$PDO_BDD->exec("SELECT UTI_PWD from T_UTILISATEUR_UTI WHERE UTI_PWD = '$_POST[pass]'");

		echo $req_nom;
		$sTab = $req_nom->fetch(PDO::FETCH_ASSOC);
		$sTabpw = $req_pw->fetch(PDO::FETCH_ASSOC);
		
		$_SESSION['nom']=$req_nom;
		$_SESSION['mots de pass']=$req_pw;
		
		
		if ($sTab['UTI_LOGIN']==$login and $sTAbpw['UTI_PWD']==$pass)
		{ 	
			header('location: index_private.php');
		}
		else
		{
			header('location: authentification.php?error=pwaut');
			exit();
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
				<h1>Authentication </h1>
				
				<form method="post" >
					<p>
					   <label for="login">Votre login :</label>
					   <input type="text" name="login" id="login" required />
					   
					   <br />
					   <label for="pass">Votre mots de passe:</label>
					   <input type="text" name="pass" id="pass" required />
					   <br />
					   <input type="submit" name="valider" value="Valider" />
					</p>
				</form>
			</div>
		</div>
		<div class="footer">

		&copy; Copyright 2017 ALEXANDRA DOS SANTOS BARROSO - Tous droits réservés
		</div>
	</body>
</html>