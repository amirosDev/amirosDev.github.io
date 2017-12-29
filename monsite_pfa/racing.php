<?php

    if (session_status()== PHP_SESSION_NONE){
        session_start();

    }
    require_once ("fonctions.php");
    require("class/Client.php");

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



      <?php

      if(isset($_SESSION['auth']))

      echo'<p align ="right"><strong> Bonjour '.' '.$_SESSION['auth']['prenom'].' '.$_SESSION['auth']['nom'].'&nbsp;&nbsp;  '.'<a href="about-us.php">Accéder à votre compte </a>'.' &nbsp;&nbsp;&nbsp; '.'<a href="logout.php">Se déconnecter</a>'.'</strong></p>';

      ?>



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
          <p>SPEED RACING est un portail automobile qui met en ligne des annonces pour la vente et l’achat de toutes sortes de véhicules d’occasion . SPEED RACING  est également un portail d’actualité automobile destiné à tous les passionnés, professionnels et décideurs du monde auto.</p>
          <div class="img-box1"><img src="images/1page-img.jpg" alt="" />
                    </div>
                 </div>


          <!--control sur le login et mot de passe -->






          <?php

          ?>
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
                        <input type="text" value="" name="pseudo" />
                      </div>
                      <div class="field">
                        <label>Password:</label>
                        <input type="password" value="" name="pass_word" />
                      </div>
                      <div class="field1">
                        <label class="extra">Remember Me:</label>

                       <input type="checkbox" class="extra" />
                        <a href="#" onclick="document.getElementById('login-form').submit()" ><em><b>Log In<span>Log In</span></b></em></a></div>

                      <ul>
                        <li><a href="#">Forgot your password?</a></li>
                        <li class="last"><a href="inscription.php">Register</a></li>
                      </ul>
                    </fieldset>
                  </form>



                </div>
              </div>
            </div>
          </div>
		  
		  


            <?php
            require "db.php";
            if (!empty($_POST)){

                if (!empty($_POST['pseudo'])) {

                    if (!empty($_POST['pass_word'])) {

                        $cl= new Client($_POST['pseudo'], $_POST['pass_word'],'', '','', '','');
                        $cl->doLogin($_POST['pseudo'],$_POST['pass_word'],$pdo);



                    } else
                        echo '<br/>'. '<p style= "color : red;">'.'** veuillez saisir votre mot de passe'.'</p>';
                }
                else
                    echo '<br/>'.'<p style= "color : red;">'.'** veuillez saisir votre username'.'</p>';
            }
            ?>

        </div>
      </div>
    </div>
  </div>

  
    <?php
    /*
  $req = $pdo->prepare('SELECT * FROM utilisateur WHERE (pseudo= :pseudo)');
  $req->execute(['pseudo' => $_POST['pseudo']]);

  $user = $req->fetch(PDO::FETCH_ASSOC);
  debug($user);

  if ( password_verify($_POST['pass_word'], $user['pass_word'])) {

      session_start();
      $_SESSION['auth'] = $user;
      header('refresh:3; url= racing.php');
      exit();


  }


    */
    ?>


    <?php /* endif ; */ ?>

  <div id="footer">
  <center> <img src="Capture.PNG" alt="Photo" /> </center> <br/>
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
<!-- END PAGE SOURCE -->
</body>
</html>