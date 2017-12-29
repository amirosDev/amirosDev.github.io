<?php require 'fonctions.php' ; ?>
<?php require 'class/Client.php' ; ?>

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
	<div class="row-2">
      <div class="left">
        <ul>
          <li><a href="racing.php" ><span>home</span></a></li>
          <li><a href= "contact-us.php"><span>contact</span></a></li>
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
	
	<?php
    require_once 'db.php';

	if (!empty($_POST)) {
		$errors = array();

		
		if(empty($_POST['nom']) || !preg_match('/^[a-z0-9_]+$/',$_POST['nom'])){
		$errors['nom']= "votre nom n'est pas valide ";
		}
		
		if(empty($_POST['prenom']) || !preg_match('/^[a-z0-9_]+$/',$_POST['prenom'])){
		$errors['prenom']= "votre prenom n'est pas valide ";
		}
		
		if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['pseudo'])){
		$errors['pseudo']= "votre pseudo n'est pas valide ";
		}
		else
		{
		$req= $pdo->prepare('SELECT pseudo FROM utilisateur WHERE pseudo=?');
		$req->execute([$_POST['pseudo']]);
		$user= $req->fetch();
		if ($user){
		$errors['pseudo']= 'ce pseudo est dèja pris';
		}
		}
		
		if(empty($_POST['pass_word']) || $_POST['pass_word'] != $_POST['confmdp']){
		$errors['pass_word']= "vous devez entrer un mot de passe valide ";
		}
		
		if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email']= "votre email n'est pas valide ";
		}
		
		if(empty($_POST['telephone'])){
		$errors['telephone']= "vous devez saisir un numero de téléphone ";
		}
		
		if(empty($_POST['adresse']) ){
		$errors['adresse']= "vous devez saisir une adresse ";
		}



        if (empty($errors)) {


            $cl = new Client($_POST['pseudo'], $_POST['pass_word'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['email']);
            $cl->addClient($pdo);

            header('refresh:4; url= racing.php');
            die('<strong>' . '<br/>' . 'Votre inscription est faite avec succès' . '</strong>');
        }

		//debug($errors);
	}
	
	?>
	
	<p> </p>
	
	
	<?php
	if (!empty($errors)): ?>

	<p style= "color : red;"> Vous n'avez pas rempli le formulaire correctement </p>
	
	<?php foreach($errors as $error):?>
		 <li style= "color : red;">  <?= $error; ?> </li> 
	
	<?php endforeach; ?>
	
	<?php endif ; ?>
	
	<div id="content">
		<div class="indent">
			<div class="wrapper">
				<div class="col-1">
					<h3><b>Inscription</b> Client</h3>
					<form id="contacts-form" action="" method="POST">
						<fieldset>
						<p> </p>
						<div class="field">
							<label>Nom :</label>
							<input type="text" value="" name="nom" />
						</div>
						<p> </p>
						<div class="field">
							<label>Prénom :</label>
							<input type="text" value="" name="prenom" />
						</div>
						<p> </p>
						<div class="field">
							<label>Pseudo :</label>
							<input type="text" value="" name="pseudo" />
						</div>
						<p> </p>
						<div class="field">
							<label>Mot De Passe :</label>
							<input type="password" value="" name="pass_word" />
						</div>
						<p> </p>
						<div class="field">
							<label>Confirmer Mot : De Passe </label>
							<input type="password" value="" name="confmdp" />
						</div>
						<p> </p>
						<div class="field">
							<label>Téléphone :</label>
							<input type="number" value="" name="telephone"  />
						</div>
						<p> </p>
						<div class="field">
							<label>E-mail :</label>
							<input type="email" value="" name="email" />
						</div>
						<p> </p>
						<div class="field">
							<label>Adresse :</label>
							<input type="text" value="" name="adresse"  />
						</div>
						<p> </p>
						 <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>SUBMIT</b></em></a></div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
    
	
    <!-- FOOTER -->
	<div id="footer">
    <div class="footer-nav">
      <div class="left">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Annonces</a></li>
          <li><a href="#">Compte</a></li>
          <li><a href="#">méca</a></li>
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
