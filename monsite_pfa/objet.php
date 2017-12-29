<?php
class client
{
private $cin;
private $nom;
private $adresse;
public function __construct($c,$n,$adr)
{
$this-> cin=$c;
$this-> nom=$n;
$this-> adresse=$adr;
}
public function affiche()
{
echo $this->cin.' '.$this->nom.' '.$this->adresse;
}
public function voisin ($adr1,$adr2)
{
if ( $this-> adresse == $a-> adresse )
echo 'voisin';
else 
echo 'non voisin' ;
}
}
$a= new client (,'Ali','Ariena');
$a= affiche();
$b= new client(,'Ali','Ariena');
$a->voisin($b);