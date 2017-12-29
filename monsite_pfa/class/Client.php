<?php
//require'database.php';
//require 'fonctions.php';
//session_start();
/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 23/04/2017
 * Time: 16:29
 */
class Client
{
    public $conn;
    private $pseudo;
    private $pass_word;
    private $nom;
    private $prenom;
    private $adresse;
    private $telephone;
    private $email;


    public function __construct($pseudo, $pass_word, $nom, $prenom, $adresse, $telephone, $email)
    {
        $this->setPseudo($pseudo);
        $this->setPassWord($pass_word);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAdresse($adresse);
        $this->setTelephone($telephone);
        $this->setEmail($email);

    }


    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo= $pseudo;
    }

    public function getPassword()
    {
        return $this->pass_word;
    }

    /**
     * @param mixed $pass_word
     */
    public function setPassWord($pass_word)
    {
        $this->pass_word = $pass_word;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function addClient($pdo){

            $req = $pdo->prepare("INSERT INTO utilisateur SET pseudo = ?, pass_word= ?, nom=?, prenom=?, adresse=?, telephone=?, email=?");
            $password = $_POST['pass_word'];
            $req->execute([$_POST['pseudo'], $password, $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['telephone'], $_POST['email']]);

    }

    public function doLogin($username,$password,$pdo){

        $req = $pdo->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
        $req->execute(['pseudo' => $username]);
        $user = $req->fetch();


        if ((strcmp($password, $user['pass_word']) == 0)) {

            $_SESSION['auth'] = $user;

        } else {
            $_SESSION['flash']['danger'] = "** identifiant ou mot de passe incorrect";
            echo '<br/>'.'<p style= "color : red;">'. $_SESSION['flash']['danger'].'</p>';
        }
    }

    public static function doLogout()
    {
        session_destroy();
        unset($_SESSION['auth']);
    }


}