<?php

if (session_status()== PHP_SESSION_NONE){
    session_start();
}

require_once ("fonctions.php");
require("db.php");

?>

<!DOCTYPE >
<html >
<head>
    <title>Home Cars</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css1.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 7]>
    <script type="text/javascript" src="js/ie_png.js"></script>
    <script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, .extra img, #search-form a, #search-form a em, #login-form .field1 a, #login-form .field1 a em, #login-form .field1 a b');</script>
    <link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body >

<?php
$req = $pdo->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
$req->execute(['pseudo' => $_POST['contact'][0]]);
$user = $req->fetch();

?>

<div>
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Propriétaire</h2>
    <p><strong>Nom :</strong> <?php echo $user['nom'] ?> </p>
    <p><strong>Prénom :</strong> <?php echo $user['prenom'] ?> </p>
    <p><strong>Télèphone :</strong> <?php echo $user['telephone'] ?> </p>
    <p><strong>E-mail :</strong> <?php echo $user['email'] ?> </p>
</div>
<br/><br/>
<strong><a href="liste_annonces_fav.php"> <== Retour à votre liste favoris</a> </strong>
</body>
</html>

