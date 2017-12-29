<?php
/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 03/05/2017
 * Time: 09:26
 */
if (session_status()== PHP_SESSION_NONE){
    session_start();
}
require("fonctions.php");
require ("db.php");
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Liste des annonces favoris</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css1/style.css">
</head>

<body>
<h1><center>Votre liste <span>d'annonces</span> favoris </center></h1>
<br/>
<form action="contact_prop.php" method="post" >
<table class="responstable">

    <tr>
        <th>Contact propriétaire</th>
        <th>Marque</th>
        <th>Kilometrage</th>
        <th>Année</th>
        <th>Carburant</th>
        <th>Prix</th>
        <th>Gouvernorat</th>
    </tr>

<?php
$tab_id=array();
$req = $pdo->prepare('SELECT  id_annonce FROM selectionner WHERE pseudo = :pseudo');
$req->execute(['pseudo' => $_SESSION['auth']['pseudo']]);

    while($id=$req->fetch()){
        array_push($tab_id,$id[0]);
    }
    $cmpt=count($tab_id);
$req = $pdo->prepare('SELECT  * FROM annonce WHERE id_annonce = :id');
    for($i=0; $i<$cmpt;$i++){
        $req->execute(['id' => $tab_id[$i]]);
        $annonce=$req->fetch(PDO::FETCH_BOTH);

        echo' <tr>';

        echo' <td><input type="radio"  name="contact[]" value=',$annonce[9],'></td>'.
            ' <td>'.$annonce[1].'</td>'.
            ' <td>'.number_format($annonce[3], 0, ',', ' ').'</td>'.
            ' <td>'.$annonce[4].'</td>'.
            ' <td>'.$annonce[5].'</td>'.
            ' <td>'.number_format($annonce[7], 3, ',', ' ').'</td>'.
            ' <td>'.$annonce[8].'</td>';

        echo' </tr>';

    }
?>

</table>
<br/>
    <input type="submit" value="contacter"/>
</form>
<br/>
<h3><a href="about-us.php"><== Retour à votre compte </a></h3>
<script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

</body>
</html>
