<?php

use PWD3\Autoloader;
use PWD3\Livre;
use PWD3\Roman;

require("class/Autoloader.class.php");
Autoloader::register();

$livre1 = new Livre("Sacha Pignot", "Le Chemin du soleil", 2020);
$livre2 = new Roman();

echo $livre1;