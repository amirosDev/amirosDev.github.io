<?php
/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 02/05/2017
 * Time: 17:10
 */

if (session_status()== PHP_SESSION_NONE){
    session_start();
}
require_once ("fonctions.php");
require ("db.php");
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

<div>
    <h2>L'annonce choisie</h2>
    <strong>
    <p><label>Nom :</label></p>

    <p><label>Prénom :</label></p>

    <p><label>Pseudo :</label></p>

    <p> <label>Mot De Passe :</label></p>

    <p><label>Confirmer Mot : De Passe </label></p>

    <p> <label>Téléphone :</label></p>

    <p><label>E-mail :</label></p>

    <p><label>Adresse :</label></p>
    </strong>
</div>

<?php foreach ($_POST["fav"] as $index => $value) {
    echo $index . " :" . $value . "<br/>";
    debug($value);

}
$where='id_annonce=8';
echo gettype($value);

    $req = $pdo->prepare('SELECT * FROM annonce WHERE '.$where);
    $req->execute();
//$selection = $req->fetch(PDO::FETCH_ASSOC);
    debug($req);

    while ($selection = $req->fetch(PDO::FETCH_ASSOC))
    {

        echo ' <div class="row">';

        echo ' <span class="cell primary" data-label="Trans">' . $selection['marque'] . '</span>'.
            '<span class="cell" data-label="Exterior">'.number_format($selection['kilometrage'], 0, ',', ' ').'</span>'.
            '<span class="cell" data-label="Interior">'.$selection['annee'].'</span>'.
            '<span class="cell" data-label="Engine">'.$selection['carburant'].'</span>'.
            '<span class="cell" data-label="Vehicle">'.number_format($selection['prix'], 3, ',', ' ').'</span>'.
            '<span class="cell" data-label="Trans">'.$selection['gouvernorat'].'</span>';

        echo '</div>';


    }


 ?>
<br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>