<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> saisir mdp </title>
	</head>
	<body>
	
	<?php
	/*if (isset($_POST['mdp']) && $_POST['mdp']=="kangourou")
	{echo "votre mot de passe est correct : voici les codes d'acces :";
	
	?>
	<strong> ADET-FRET-VGFR-NHYU </strong>
	
	<?php
	}
	else
	echo "votre mot de passe est incorrect!!";*/
	?>
	<pre>
	<?php
	print_r($_GET);
	?>
	</pre>
	<?php
	echo $_SERVER['REMOTE_ADDR']
	?>
	</body>
</html>