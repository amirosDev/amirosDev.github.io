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



//foreach ($_POST['fav'] as $index => $value) {
  //  echo $index . " :" . $value . "<br/>";
   // debug($value);

//}
$cmpt=count($_POST['fav']);
for($i=0;$i<$cmpt;$i++){
    $set1='valeur='.$_POST['fav'][$i];
    $req1 = $pdo->prepare('INSERT INTO liste_annonce_favoris SET '.$set1);
    $req1->execute();
    //$set2="'id_fav'=MAX('id_fav')";
    $set2 = $pdo->lastInsertId();
    //$req2 = $req2->execute();


    //debug($id_fav);

    //echo $id_fav.' ';
       $req2 = $pdo->prepare('INSERT INTO selectionner SET id_annonce=?, id_fav=?, pseudo=?');
    $req2->execute([$_POST['fav'][$i],$set2,$_SESSION['auth']['pseudo']]);
}
header('refresh:1; url= about-us.php');

//$set=array();
//$set='valeur='.$_POST['fav'][$i];
//$where='id_annonce='.$_POST['fav'][0];
//echo $where;
//echo gettype($value);
/*
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
*/