<?php
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home Cars</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
<body id="page1">
<!-- START PAGE SOURCE -->
<div id="main">
  <div id="header">
    <div class="row-1">
      <div class="fleft"><a href="#"><img src="images/logo.gif" alt="" /></a></div>
      <div class="fright">
        <ul>
          <li><a href="racing.php"><img src="images/icon1-act.gif" alt="" /></a></li>
          <li><a href="contact-us.php"><img src="images/icon2.gif" alt="" /></a></li>
          <li><a href="administrateur.php"><img src="images/icon3.gif" alt="" /></a></li>
        </ul>
      </div>
    </div>
	<strong><div align="right">hello cher membre : accéder à votre compte</div> </strong><br/>
    <div class="row-2">
      <div class="left">
        <ul>
          <li><a href="racing.php" class="active"><span>home</span></a></li>
          <li><a href="contact-us.php"><span>contact</span></a></li>
          <li><a href="articles.php"><span>annonces</span></a></li>
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
<br/>
<div id="content">
    <ul class="box-list">
        <li>
            <div class="box">
                <div class="border-bot">
                    <div class="right-bot-corner">
                        <div class="left-bot-corner">
                            <div class="inner">
                                <div class="box1">
                                    <div class="inner">
                                        <h4><b>Spécialité</b> </h4>
                                        <p> <strong> Nous vous offrons l'opportunité d'être dans un site spécialisé en vente des véhicules de tout genre. <strong> </p>
                                        <p><a href="#"><img src="images/arrow.gif" alt="" /></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="alt">
            <div class="box">
                <div class="border-bot">
                    <div class="right-bot-corner">
                        <div class="left-bot-corner">
                            <div class="inner">
                                <div class="box1">
                                    <div class="inner">
                                        <h4><b>Expertise</b> </h4>
                                        <p> <strong> Nous vous offront l'opportunité d'être en contact avec un réseau d'expert pour optimiser votre achat. </strong></p>
                                        <p> <a href="#"><img src="images/arrow.gif" alt="" /></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="last">
            <div class="box">
                <div class="border-bot">
                    <div class="right-bot-corner">
                        <div class="left-bot-corner">
                            <div class="inner">
                                <div class="box1">
                                    <div class="inner">
                                        <h4> <b>Facilité</b> </h4>
                                        <p> <strong> Nous vous offrons l'opportunité de réaliser un achat optimal avec un simple clic. </strong></p>
                                        <p> <a href="#"><img src="images/arrow.gif" alt="" /></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="indent">
        <div class="wrapper">
            <div class="col-1">
                <h3><b>Bienvenue dans</b> Speed Racing </h3>
                <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros maurien ulla facilis.</p>
                <div class="img-box1"><img src="images/1page-img.jpg" alt="" />
                    <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu <a href="#">sempor ridictum</a> a non laorem lacingilla wisi. Nuncrhoncus eros maurien ulla facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent.</p>
                </div>
                <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor <a href="#">ridictum a non</a> laorem lacingilla wisi.</p>
                <p class="p0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

