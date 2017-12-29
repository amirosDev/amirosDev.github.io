<?php
require_once 'bootstrap.php' ;
session_start();
//je veux récuperer le premier utilisateur

$user = $db->query('SELECT * FROM utilisateur')->fetchAll();
var_dump($user);
die();

if (!empty($_POST)) {
    $errors = array();

    $db =App::getDatabase();

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
        $user=$db->query('SELECT pseudo FROM utilisateur WHERE pseudo=?',[$_POST['pseudo']])->fetch();

        if ($user){
            $errors['pseudo']= 'ce pseudo est dèja pris';
        }
    }

    if(empty($_POST['passwo']) || $_POST['passwo'] != $_POST['confmdp']){
        $errors['passwo']= "vous devez entrer un mot de passe valide ";
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

        $req= $pdo->prepare("INSERT INTO utilisateur SET pseudo = ?, passwo= ?, nom=?, prenom=?, adresse=?, telephone=?, email=?");
        $password= password_hash($_POST['passwo'], PASSWORD_BCRYPT);
        $req->execute([$_POST['pseudo'], $password, $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['email']]);

        header('refresh:4; url= racing.php');
        die('<strong>'.'<br/>'.'Votre inscription est faite avec succès'.'</strong>');

    }
    //debug($errors);
}