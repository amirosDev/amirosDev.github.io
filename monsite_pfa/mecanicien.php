<?php require 'fonctions.php' ; ?>
<?php require 'class/Meca.php' ; ?>
<?php require 'db.php'; ?>

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
<body id="page6">
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
    <div class="row-2">
      <div class="left">
        <ul>
          <li><a href="racing.php" ><span>home</span></a></li>
          <li><a href="contact-us.php"  ><span>contact</span></a></li>
          <li><a href="articles.php" ><span>annonces</span></a></li>
          <li><a href="about-us.php" ><span>mon compte</span></a></li>
          <li class="last"><a href="mecanicien.php" class="active"><span>espace mécanicien</span></a></li>
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
  
  <br/><br/><br/><br/>

    <!--content-->
    <form id="contacts-form" action="" method="POST">
    <?php

    if (!empty($_POST)) {
        $errors = array();

        if(empty($_POST['nom_mec']) || !preg_match('/^[a-z0-9_]+$/',$_POST['nom_mec'])){
            $errors['nom_mec']= "votre nom n'est pas valide ";
        }
        if(empty($_POST['prenom_mec']) || !preg_match('/^[a-z0-9_]+$/',$_POST['prenom_mec'])){
            $errors['prenom_mec']= "votre prenom n'est pas valide ";
        }
        if(empty($_POST['telephone_mec'])){
            $errors['telephone_mec']= "vous devez saisir un numero de téléphone ";
        }
        if(empty($_POST['adresse_mec']) ){
            $errors['adresse_mec']= "vous devez saisir une adresse ";
        }

        if (empty($errors)) {

            $m = new Meca($_POST['nom_mec'], $_POST['prenom_mec'], $_POST['telephone_mec'], $_POST['region'], $_POST['adresse_mec']);
            $m->addMecanicien($pdo);
            header('refresh:4; url= racing.php');
            die('<strong>' . '<b>' . 'Merci de nous rejoindre dans notre réseau de mécanicien '.'</b>'. '</strong>');
         }
    }

    ?>

       <?php if (!empty($errors)): ?>

        <p style= "color : red;"> Vous n'avez pas rempli le formulaire correctement </p>

       <?php foreach($errors as $error):?>
            <li style= "color : red;">  <?= $error; ?> </li>
       <?php endforeach; ?>

       <?php endif ; ?>

    <div id="content">
        <div class="indent">
            <div class="wrapper">
                <div class="col-1">
                    <h3><b>Inscription</b> Mécanicien</h3>
                    <form id="contacts-form" action="" method="POST">
                        <fieldset>
                            <p> </p>
                            <div class="field">
                                <label>Nom :</label>
                                <input type="text" value="" name="nom_mec" />
                            </div>
                            <p> </p>
                            <div class="field">
                                <label>Prénom :</label>
                                <input type="text" value="" name="prenom_mec" />
                            </div>
                            <p> </p>
                            <div class="field">
                                <label>Téléphone :</label>
                                <input type="number" value="" name="telephone_mec"  />
                            </div>
                            <p> </p>
                            <div class="field">
                                <label>Région :</label>
                                <select  name="region" >
                                    <option value="Ariana">Ariana</option>
                                    <option value="Beja">Béja</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Gabès">Gabès</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Jendouba">Jendouba</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserine">Kasserine</option>
                                    <option value="Kébili">Kébili</option>
                                    <option value="Kef">Kef</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="Manouba">Manouba</option>
                                    <option value="Mednine">Médenine</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Tozeur">Tozeur</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Zaghouan">Zaghouan</option>
                                </select>
                            </div>
                            <p> </p>
                            <div class="field">
                                <label>Adresse :</label>
                                <input type="text" value="" name="adresse_mec"  />
                            </div>
                            <p> </p>
                            <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>SUBMIT</b></em></a></div>
                        </fieldset>
                    </form>
                </div>
            </div>
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