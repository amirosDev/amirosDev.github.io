<?php

/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 03/05/2017
 * Time: 15:00
 */
class Meca
{
    private $nom_meca;
    private $prenom_meca;
    private $tel_meca;
    private $region;
    private $adresse_meca;

    public function __construct($nom_meca, $prenom_meca, $tel_meca, $region, $adresse_meca)
    {
        $this->setNom_meca($nom_meca);
        $this->setPrenom_meca($prenom_meca);
        $this->setTel_meca($tel_meca);
        $this->setRegion($region);
        $this->setAdresse_meca($adresse_meca);

    }


    public function getNom_meca()
    {
        return $this->nom_meca;
    }

    public function setNom_meca($nom_meca)
    {
        $this->nom_meca= $nom_meca;
    }

    public function getPrenom_meca()
    {
        return $this->prenom_meca;
    }


    public function setPrenom_meca($prenom_meca)
    {
        $this->prenom_meca = $prenom_meca;
    }


    public function getTel_meca()
    {
        return $this->tel_meca;
    }


    public function setTel_meca($tel_meca)
    {
        $this->tel_meca = $tel_meca;
    }


    public function getRegion()
    {
        return $this->region;
    }


    public function setRegion($region)
    {
        $this->region = $region;
    }


    public function getAdresse_meca()
    {
        return $this->adresse_meca;
    }


    public function setAdresse_meca($adresse_meca)
    {
        $this->adresse_meca = $adresse_meca;
    }

    public function addMecanicien ($pdo){

        $sql = $pdo->prepare("INSERT INTO mecanicien (nom_mec, prenom_mec, telephone_mec,region,adresse_mec) VALUES (:nom_mec, :prenom_mec,:telephone_mec, :region,:adresse_mec)");
        $sql->execute(array('nom_mec' => $_POST['nom_mec'], 'prenom_mec' => $_POST['prenom_mec'], 'telephone_mec' => $_POST['telephone_mec'],'region' => $_POST['region'],'adresse_mec' => $_POST['adresse_mec']));
  echo "sayer";
    }


}