<?php

if (session_status()== PHP_SESSION_NONE){
    session_start();
    require_once "db.php";
    require "fonctions.php";
    require("class/Client.php");

}
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
<body id="page2">
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
                    <li><a href="contact-us.php" class="active" ><span>contact</span></a></li>
                    <li><a href="articles.php" ><span>annonces</span></a></li>
                    <li><a href="about-us.php" ><span>mon compte</span></a></li>
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

    <!-- CONTENT -->
    <br/><br/><br/><br/>
<?php
    $req = $pdo->prepare("SELECT * FROM mecanicien ");
    $req->execute();
?>


    <div class="caption"><b>Liste des mécaniciens </b></div>
    <div id="table">
        <div class="header-row row">
            <span class="cell primary">Nom</span>
            <span class="cell">Prénom</span>
            <span class="cell">Télèphone</span>
            <span class="cell">Région</span>
            <span class="cell">Adresse</span>
        </div>

        <?php

        while ($selection = $req->fetch(PDO::FETCH_ASSOC))
        {

            echo ' <div class="row">';

            echo ' <span class="cell primary" data-label="Trans">' . $selection['nom_mec'] . '</span>'.
                '<span class="cell" data-label="Exterior">'.$selection['prenom_mec'].'</span>'.
                '<span class="cell" data-label="Interior">'.$selection['telephone_mec'].'</span>'.
                '<span class="cell" data-label="Engine">'.$selection['region'].'</span>'.
                '<span class="cell" data-label="Vehicle">'.$selection['addresse_mec'].'</span>';

            echo '</div>';

        }

        ?>
    </div>
 <br/><br/><br/><br/><br/>

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
