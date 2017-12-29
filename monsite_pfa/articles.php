<?php
if (session_status()== PHP_SESSION_NONE){
session_start();
}
require_once "db.php";
require "fonctions.php";
require("class/Client.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home Cars</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="essai1.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_600.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_Dm_BT_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, .extra img, #search-form a, #search-form a em, #login-form .field1 a, #login-form .field1 a em, #login-form .field1 a b');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page3">
<!-- START PAGE SOURCE -->
<div id="main">
  <div id="header">
    <div class="row-1">
      <div class="fleft"><a href="racing.php"><img src="images/logo.gif" alt="" /></a></div> 
      <div class="fright">
        <ul>
          <li><a href="racing.php"><img src="images/icon1.gif" alt="" /></a></li>
          <li><a href="contact-us.php"><img src="images/icon2.gif" alt="" /></a></li>
          <li><a href="administrateur.php"><img src="images/icon3.gif" alt="" /></a></li>
        </ul>
      </div>
    </div>

      <?php

      if(isset($_SESSION['auth']))

          echo'<p align ="right"><strong> Bonjour '.' '.$_SESSION['auth']['prenom'].' '.$_SESSION['auth']['nom'].'&nbsp;&nbsp;  '.'<a href="about-us.php">Accéder à votre compte </a>'.' &nbsp;&nbsp;&nbsp; '.'<a href="logout.php">Se déconnecter</a>'.'</strong></p>';

      ?>

    <div class="row-2">
      <div class="left">
        <ul>
          <li><a href="racing.php" ><span>home</span></a></li>
          <li><a href="contact-us.php" ><span>contact</span></a></li>
          <li><a href="articles.php" class="active"><span>annonces</span></a></li>
          <li><a href="about-us.php"><span>mon compte</span></a></li>
          <li class="last"><a href="mecanicien.php"><span>espace mécanicien</span></a></li>
        </ul>
      </div>
    </div>
    <div class="row-3">
      <div class="inside">
        <h2>SpeedRacing  <b> Get the best</b></h2>
        <p><strong>Voulez-vous acheter une voiture et vous ne savez pas comment optimiser votre choix? </strong></p>
		<p> <strong> Nous vous offront la meilleure opportunité pour satisfaire votre besoin!! </strong> <p>
        <?php
		/*<form action="#" id="search-form">
          <fieldset>
            <label>Search:</label>
            <input type="text" />
            <a href="#" class="link1"><em><b>Go!</b></em></a>
          </fieldset>
        </form>
		*/ ?>
      </div>
    </div>
    <div class="extra"><img src="images/header-img.png" alt="" /></div>
  </div>
    <br/><br/><br/>
<!-- CONTENT -->
    <div class="indent">
        <div class="wrapper">

    <form id="contacts-form" action="insertion_fav.php" method="POST">
    <?php if(isset($_SESSION['auth'])): ?>
    <?php if(!empty($_POST)) : ?>
        <?php
       $tab=array();
       $cmpt= count($tab);
       $where='';
       array_push($tab,$_POST['marque'] ,$_POST['kilometrage'],$_POST['annee'],$_POST['carburant'],$_POST['prix'],$_POST['gouvernorat']);
       $option=array('marque','kilometrage','annee','carburant','prix','gouvernorat');
       for ($i = 0;$i<6 ; $i++)
       {
           if ($tab[$i]!='*'){
               if ($option[$i]== 'kilometrage' || $option[$i]== 'prix')
               {

                   $where.=$option[$i].'<='.$tab[$i] .' and ';
               }
               elseif ($option[$i]== 'annee')
               {
                   $where.=$option[$i].'>='.$tab[$i] .' and ';

               }
               else
               $where.=$option[$i].'='.$tab[$i] .' and ';
           }
       }
       $where = substr($where, 0, -5);
       if (empty($where)) $where='1';

       $req = $pdo->prepare("SELECT * FROM annonce WHERE $where");
       $req->execute();


       //debug($selection);

    ?>

    <br/><br/><br/>


    <div class="caption"><b>Liste Annonces  recherchées </b></div>
    <div id="table">
        <div class="header-row row">
            <span class="cell primary">Marque</span>
            <span class="cell">Kilométrage</span>
            <span class="cell">Année</span>
            <span class="cell">Carburant</span>
            <span class="cell">Prix</span>
            <span class="cell">Gouvernorat</span>
            <span class="cell">Favoris</span>
        </div>


            <?php

            $matrice=array();

            while ($selection = $req->fetch(PDO::FETCH_ASSOC))
            {

                echo ' <div class="row">';

                echo ' <span class="cell primary" data-label="Trans">' . $selection['marque'] . '</span>'.
                    '<span class="cell" data-label="Exterior">'.number_format($selection['kilometrage'], 0, ',', ' ').'</span>'.
                    '<span class="cell" data-label="Interior">'.$selection['annee'].'</span>'.
                    '<span class="cell" data-label="Engine">'.$selection['carburant'].'</span>'.
                    '<span class="cell" data-label="Vehicle">'.number_format($selection['prix'], 3, ',', ' ').'</span>'.
                    '<span class="cell" data-label="Trans">'.$selection['gouvernorat'].'</span>'.
                    '<span class="cell" data-label="Exterior">'.'<input type="checkbox"  name="fav[]" value=',$selection['id_annonce'],'></span>';
                echo '</div>';
                array_push($matrice,$selection);

            }


            // echo $matrice[0]['marque'];
            //$_SESSION['annonce']=$matrice;
            //debug($matrice[1]);
            //echo'<br/>'. $_SESSION['annonce'][5]['pseudo'];


            ?>
        <br/><br/>

            <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>ajouter</b></em></a></div>
        </form>

        <?php else : echo'<br/><br/><br/><br/><br/><br/><center><h4><a href="rechercher.php">Veuillez cliquez ici pour rechercher une annonce  </a></h4></center><br/><br/><br/><br/> ';
        endif; ?>
        <?php endif; ?>

    <?php  if(!isset($_SESSION['auth'])): ?>
        <br/><br/><br/><br/><br/>
        <h4> <center> <a href="about-us.php"> Veuillez s'authentifier ou sinscrire pour accéder à cette page</a></center></h4>
        <br/><br/>

    <?php endif; ?>

        </div>
    </div>


    <br/><br/><br/><br/>
	 <!-- FOOTER -->
	<div id="footer">
    <div class="footer-nav">
      <div class="left">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Annonces</a></li>
          <li><a href="#">Compte</a></li>
          <li class="last"><a href="#">méca</a></li>
        </ul>
      </div>
    </div>
    <div class="footerlink">
      
      <div style="clear:both;"></div>
    </div>
  </div>

</div>
<script type="text/javascript"> Cufon.now(); </script>

  </body>
  </html>