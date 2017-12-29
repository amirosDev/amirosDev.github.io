<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> open2 </title>
	</head>
	<body>
	<p>
	<a href="bonjour.php?nom=kanoun&amp;prenom=amir"> Dis-moi bonjour </a>
	</p>
	<form action="bonjour.php" method="POST">
	<p>  <label> Etes vous statisticien :<input type="checkbox" name="statisticien" /> </label> </p>
	<p> <input type="submit" /> </p>
	</form>
	<textarea name="message" rows="8" cols="45">
	
	</textarea>
	<p> où habitez vous? </p>
	<select name="choix">
    <option value="tunis">tunis</option>
    <option value="sfax">sfax</option>
    <option value="sousse">sousse</option>
    <option value="nabeul">nabeul</option>
</select>
	</body>
</html>