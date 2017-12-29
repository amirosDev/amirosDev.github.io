<?php

/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 04/05/2017
 * Time: 03:53
 */
class Admin
{
    private $login;
    private $password;

    public function __construct()
    {
        $this->login='admin';
        $this->password='admin';
    }

    public function checkAdmin($log,$pass,$pdo)
    {
        $req = $pdo->prepare('SELECT * FROM administrateur');
        $req->execute();
        $user = $req->fetch();
        if ((strcmp($log, $user['pseudoname']) == 0) && (strcmp($pass, $user['motdepasse']) == 0))
            $_SESSION['admin'] = "hello admin";
        else
            echo '<br/>'.'<p style= "color : red;">'.'Vos coordonnées sont saisies incorrectement'.'</p>';
    }

    public static function logOutAdmin()
    {
        session_destroy();
        unset($_SESSION['admin']);
    }


}