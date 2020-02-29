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
$livre4 = new Roman("Josiane Gilber", "Soushi de rose", 2018, 6);

$livre5 = new BD("Josiane Gilbert", "Josiane Gilbert", "George et Roger", 2022);
$livre6 = new BD("Sacha Pignot", "Josette la chaussette", "Antigonie", 2002);

// __toString et Disponibilité
echo "<h2>__toString et Disponibilité</h2>";
$livre1->disponibilite = false;
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

// Getters
// getEcrivain
echo "<h2>Getters</h2>";
echo "<p>Écrivain livre 2 :{$livre2->getEcrivain()} <br> Écrivain livre 4 : {$livre4->getEcrivain()} <br> Écrivain livre 6 : {$livre6->getEcrivain()}</p>";
// getTitre
echo "<p>Titre livre 2 :{$livre2->getTitre()} <br> Titre livre 4 : {$livre4->getTitre()} <br> Titre livre 6 : {$livre6->getTitre()}</p>";
// getAnneePublication
echo "<p>Année de publication du livre 2 :{$livre2->getAnneePublication()} <br> Année de publication du livre 4 : {$livre4->getAnneePublication()} <br> Année de publication du livre 6 : {$livre6->getAnneePublication()}</p>";
// getDisponibilite
$livre5->disponibilite = false;
echo "<p>Disponibilite livre 2 :{$livre2->getDisponibilite()} <br> Disponibilite livre 5 : {$livre5->getDisponibilite()} <br> Disponibilite livre 6 : {$livre6->getDisponibilite()}</p>";
// getGenre
echo "<p>Genre livre 3 : {$livre3->getGenre()} <br> Genre livre 4 : {$livre4->getGenre()}</p>";
// getDessinateur
echo "<p>Dessinateur livre 5 : {$livre5->getDessinateur()} <br> Dessinateur livre 6 : {$livre6->getDessinateur()}</p>";

// getter magique
echo "<h3>Getter Magique</h3>";
echo "<p>Écrivain livre 2 :{$livre2->ecrivain} <br> Écrivain livre 4 : {$livre4->ecrivain} <br> Écrivain livre 6 : {$livre6->ecrivain}</p>";

// Setters
echo "<h2>Setters</h2>";
// setEcrivain
$livre2->setEcrivain("loui le beau");
$livre4->setEcrivain("loui le beau");
$livre6->setEcrivain("loui le beau");
echo "<p>Écrivain livre 2 :{$livre2->getEcrivain()} <br> Écrivain livre 4 : {$livre4->getEcrivain()} <br> Écrivain livre 6 : {$livre6->getEcrivain()}</p>";
// setTitre
$livre2->setTitre("loui le beau");
$livre4->setTitre("loui le beau");
$livre6->setTitre("loui le beau");
echo "<p>Titre livre 2 :{$livre2->getTitre()} <br> Titre livre 4 : {$livre4->getTitre()} <br> Titre livre 6 : {$livre6->getTitre()}</p>";
// setAnneePublication
$livre2->setAnneePublication();
$livre4->setAnneePublication(2000);
$livre6->setAnneePublication();
echo "<p>Année de publication du livre 2 :{$livre2->getAnneePublication()} <br> Année de publication du livre 4 : {$livre4->getAnneePublication()} <br> Année de publication du livre 6 : {$livre6->getAnneePublication()}</p>";
// setDisponibilite
$livre2->setDisponibilite(false);
$livre5->setDisponibilite(true);
$livre6->setDisponibilite(false);
echo "<p>Disponibilite livre 2 :{$livre2->getDisponibilite()} <br> Disponibilite livre 5 : {$livre5->getDisponibilite()} <br> Disponibilite livre 6 : {$livre6->getDisponibilite()}</p>";
// setGenre
$livre3->setGenre(5);
$livre4->setGenre(5);
echo "<p>Genre livre 3 : {$livre3->getGenre()} <br> Genre livre 4 : {$livre4->getGenre()}</p>";
// setDessinateur
$livre5->setDessinateur("Soushilozore");
$livre6->setDessinateur("Soushilozore");
echo "<p>Dessinateur livre 5 : {$livre5->getDessinateur()} <br> Dessinateur livre 6 : {$livre6->getDessinateur()}</p>";

// setter magique
echo "<h3>Setter Magique</h3>";
echo "<p>Écrivain livre 2 :{$livre2->ecrivain} <br> Écrivain livre 4 : {$livre4->ecrivain} <br> Écrivain livre 6 : {$livre6->ecrivain}</p>";


?>

<h2>Objets</h2>
<pre><?= var_dump($livre1) ?></pre>
<pre><?= var_dump($livre2) ?></pre>
<pre><?= var_dump($livre3) ?></pre>
<pre><?= var_dump($livre4) ?></pre>
<pre><?= var_dump($livre5) ?></pre>
<pre><?= var_dump($livre6) ?></pre>
