<?php

use SSL\Trace;
use PWD3\Autoloader;
use PWD3\BD;
use PWD3\Livre;
use PWD3\Roman;

require("class/Autoloader.class.php");
Autoloader::register();

// Création d'objets Livre, Roman et BD.
$livre1 = new Livre("Sacha Pignot", "Le Chemin du soleil", 2020);
$livre2 = new Livre("Josiane Gilbert", "La chaussette de l'espace", 2025);

$livre3 = new Roman("Sacha Pignot", "Le veilleur du phare", 2023, 5);
$livre4 = new Roman("Josiane Gilber", "Soushi de rose'", 2018, 6);

$livre5 = new BD("Josiane Gilbert", "Josiane Gilbert", "George et Roger", 2022);
$livre6 = new BD("Sacha Pignot", "Josiane Gilbert", "Antigonie", 2002);

// Disponibilité
$livre1->setDisponibilite(false);
echo $livre1; 
$livre1->disponibilite = true;
echo $livre1; 
$livre3->disponibilite = false;
echo $livre3; 
$livre3->disponibilite = true;
echo $livre3; 
$livre5->disponibilite = false;
echo $livre5; 
$livre5->disponibilite = true;
echo $livre5; 

$livre2->setAnnePublication("test");

// getters

echo "<h2>Getters</h2>";
echo "<p>Écrivain livre 2 :{$livre2->getEcrivain()} <br> Écrivain livre 4 : {$livre4->getEcrivain()} <br> Écrivain livre 6 : {$livre6->getEcrivain()}</p>";

// getter magique
echo "<h2>Getter Magique</h2>";
echo "<p>Écrivain livre 2 :{$livre2->ecrivain} <br> Écrivain livre 4 : {$livre4->ecrivain} <br> Écrivain livre 6 : {$livre6->ecrivain}</p>";

// setter
?>

<pre><?= var_dump($livre3) ?></pre>
