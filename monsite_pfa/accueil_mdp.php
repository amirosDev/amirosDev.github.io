<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> accueil mdp </title>
	</head>
	<body>
	<form action="accueil_mdp.php" method= "POST">
	<p> <label> Veuillez saisir le correct mot de passe : <input type="password" name="mdp"  /> </label>  &nbsp;&nbsp;&nbsp;
	 <input type="submit" value="valider" /> </p>
	
	</form>
	<?php
	if (!isset($_POST['mdp'])) 
	{
	?>
	<form action="accueil_mdp.php" >
	
	</form>
	<?php
	}
	else if ( $_POST['mdp']!="kangourou")
	{
	echo 'vous n\'avez pas saisi le mot de passe correctement. Veuillez resaisir!!';
	}
	else
	{
	echo "votre mot de passe est correct : voici les codes d'acces :";
	?>
	
	<strong> ADET-FRET-VGFR-NHYU </strong>
	<?php
	}
	?>
	</body>
</html>