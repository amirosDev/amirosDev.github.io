<?php
class score
{
private $sc ;
private $scorej;
const SCOREMAX = 1000 ;

public function __construct($s,$j)
{
if ($s > self::SCOREMAX)
echo ' <p> dépassement de score max </p> ' ;
else
{
$this->sc=$s;;
$this->scorej= $j;
}
}
public static function affi ()
{
echo '<p>'.self::SCOREMAX.'</p>';
}
$joueur= new score(400,'essai');
