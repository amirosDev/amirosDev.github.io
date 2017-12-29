<?php

if (session_status()== PHP_SESSION_NONE){
    session_start();
}
require 'fonctions.php' ;
require 'class/Admin.php' ;
require 'db.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home Cars</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="menu1/style.css" type="text/css" />
    <script type="text/javascript" src="menu1/functions.js"></script>
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
<body id="page5">
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
        if(isset($_SESSION['admin']))

            echo'<p align ="right"><strong> Bienvenue à votre espace administrateur '.'</strong> '.' &nbsp;'. '<strong>'.'<a href="logout.php">Se déconnecter</a>'.'</strong></p>';

        ?>


        <div class="row-2">
            <div class="left">
                <ul>
                    <li><a href="racing.php" ><span>home</span></a></li>
                    <li><a href="contact-us.php"><span>contact</span></a></li>
                    <li><a href="articles.php"><span>annonces</span></a></li>
                    <li><a href="about-us.php"  ><span>mon compte</span></a></li>
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
    <br/><br/><br/><br/>
    <!-- CONTENT -->

    <?php  if(!isset($_SESSION['admin'])): ?>
        <h4> Veuillez s'authentifier pour accéder à votre espace administrateur</h4>
        <br/><br/>
        <div class="indent">
            <div class="wrapper">
                <div class="col-2">
                    <div class="box3">
                        <div class="right-bot-corner">
                            <div class="left-bot-corner">
                                <div class="inner">
                                    <h4><b>Login</b> Form</h4>
                                    <form action="" id="login-form" method="POST">
                                        <fieldset>
                                            <div class="field">
                                                <label>Username:</label>
                                                <input type="text" value="" name="login" />
                                            </div>
                                            <div class="field">
                                                <label>Password:</label>
                                                <input type="password" value="" name="password" />
                                            </div>
                                            <br/>
                                            <div class="field1">
                                                <a href="#" onclick="document.getElementById('login-form').submit()" ><em><b>Log In<span>Log In</span></b></em></a></div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        if (!empty($_POST)){
            if (!empty($_POST['login'])) {
                if (!empty($_POST['password'])) {

                    $a= new Admin();
                    $a->checkAdmin($_POST['login'],$_POST['password'],$pdo);

                } else
                    echo '<br/>'. '<p style= "color : red;">'.'** veuillez saisir votre mot de passe'.'</p>';
            }
            else
                echo '<br/>'.'<p style= "color : red;">'.'** veuillez saisir votre username'.'</p>';

        }

        ?>

    <?php endif; ?>

    <?php  if(isset($_SESSION['admin'])): ?>

    <div id="menu">
        <div class="menu" id="menu1" onclick="afficheMenu(this)">
            <a href="#"><h3>Gérer les clients</h3></a>
        </div>

            <div class="sousmenu">
                <a href="#"><h3>Consulter les clients</h3></a>
            </div>
            <div class="sousmenu">
                <a href="#"><h3>supprimer un client</h3></a>
            </div>

        <br/><br/>

        <div class="menu" id="menu2" onclick="afficheMenu(this)">
            <a href="#"> <h3>Gérer les annonce</h3></a>
        </div>
        <div class="sousmenu">
            <a href="#"><h3>Consulter les annonces</h3></a>
        </div>
        <div class="sousmenu">
            <a href="#"><h3>supprimer une annonce</h3></a>
        </div>

        <br/><br/>

        <div class="menu" id="menu3">
            <a href="#"> <h3>Gérer la liste des mécaniciens</h3></a>
        </div>
        <div class="sousmenu">
            <a href="#"><h3>Consulter les mécaniciens</h3></a>
        </div>
        <div class="sousmenu">
            <a href="#"><h3>supprimer un mécanicien</h3></a>
        </div>

        <br/><br/>

        <div class="menu" id="menu4" onclick="afficheMenu(this)">
            <a href="#"><h3>Statistiques du site</h3></a>
        </div>

    </div>

    <?php endif; ?>

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