<?php

use PWD3\Autoloader;
use PWD3\BD;
use PWD3\Livre;
use PWD3\Roman;

require("class/Autoloader.class.php");
Autoloader::register();

$livre1 = new Livre("Sacha Pignot", "Le Chemin du soleil", 2020);
$livre2 = new Roman("Sacha Pignot", "Le veilleur du phare", 2023, 5);
$livre3 = new BD("Josiane Gilbert", "Josiane Gilbert", "George et Roger", 2022);

$livre3->disponibilite = false;

echo $livre1;
echo $livre2;
echo $livre3; ?>

<pre><?= var_dump($livre3) ?></pre>
