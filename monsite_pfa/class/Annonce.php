<?php

/**
 * Created by PhpStorm.
 * User: mediacity
 * Date: 04/05/2017
 * Time: 13:54
 */
class Annonce
{
    private $marque;
    private $kilometrage;
    private $annee;
    private $carburant;
    private $prix;
    private $gouvernorat;

    public function __construct($marque, $kilometrage, $annee, $carburant, $prix, $gouvernorat)
    {
        $this->marque($marque);
        $this->kilometrage($kilometrage);
        $this->annee($annee);
        $this->carburant($carburant);
        $this->prix($prix);
        $this->gouvernorat($gouvernorat);

    }

    public function addAnnonce($marque,$kilometrage,$annee,$carburant,$prix,$gouvernorat,$description,$pseudo,$pdo){

        $req = $pdo->prepare("INSERT INTO annonce SET marque = ?, kilometrage= ?, annee=?, carburant=?, prix=?, gouvernorat=?, description=?, pseudo=?");
        $req->execute([$marque, $kilometrage, $annee, $carburant, $prix, $gouvernorat, $description,$pseudo]);

    }

    public function rechercheAnnonce($marque,$kilometrage,$annee,$carburant,$prix,$gouvernorat){
        $tab=array();
        $cmpt= count($tab);
        $where='';
        array_push($tab,$marque ,$kilometrage,$annee,$carburant,$prix,$gouvernorat);
        $option=array('marque','kilometrage','annee','carburant','prix','gouvernorat');
        for ($i = 0;$i<6 ; $i++)
        {
            if ($tab[$i]!='*'){
                if ($option[$i]== 'kilometrage' || $option[$i]== 'prix')
                {

                    $where.=$option[$i].'<='.$tab[$i] .' and ';
                }
                elseif ($option[$i]== 'annee')
                {
                    $where.=$option[$i].'>='.$tab[$i] .' and ';

                }
                else
                    $where.=$option[$i].'='.$tab[$i] .' and ';
            }
        }
        $where = substr($where, 0, -5);
        if (empty($where)) $where='1';
    }
}