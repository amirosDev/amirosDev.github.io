<?php
$pdo= new PDO('mysql:dbname=data_pfa;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

/*
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=data_pfa', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
*/
