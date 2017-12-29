<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		
	</head>
	<body>
	<p>
	<?php
	if (isset($_GET['nom']) AND isset($_GET['prenom'])) 
		 echo 'Bonjour '. $_GET['nom'].' '.$_GET['prenom'] ;
	else
		echo'pas de nom et prenom <br />';
	if (isset($_POST['statisticien']))
		echo $_POST['statisticien'];
	else
		echo "vous n'etes pas statisticien" ;
	?>
	</p>
	</body>
</html>