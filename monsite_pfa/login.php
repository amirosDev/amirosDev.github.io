<?php

require "fonctions.php";

if (!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['pass_word'])){

    require_once "db.php";
    $req= $pdo->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
    $req->execute(['pseudo'=> $_POST['pseudo']]);
    $user= $req->fetch();
    debug($user);
    if(password_verify($_POST['pass_word'],$user['pass_word'])){
        $_SESSION['auth']= $user;
        header('Location: racing.php');
        exit();
    }
    else{
        $_SESSION['flash']['danger']="identifiant ou mot de passe incorrect";
        echo $_SESSION['flash']['danger'];

    }

}
else if(!empty($_POST)){
    $_SESSION['flash']['danger']="remplir tous les champs";
    echo $_SESSION['flash']['danger'];

}

?>


<div id="main">
    <div id="content">
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
                       <input type="submit" value="login" />
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
        </div>
      </div>
    </div>
