<?php

namespace PWD3;

class BD extends Livre
{
    private $dessinateur;

    public function __construct(string $ecrivain = "", string $dessinateur = "", string $titre = "", int $annePublication = 0)
    {
        parent::__construct($ecrivain, $titre, $annePublication);
        $this->dessinateur = $dessinateur;
    }

    public function getDessinateur()
    {
        return $this->dessinateur;
    }

    public function setDessinateur($dessinateur = "")
    {
        $this->dessinateur = $dessinateur;
    }

    public function __toString()
    {
        $string = "<p>Le livre {$this->titre}, écrit par {$this->ecrivain} en l'an {$this->anneePublication} et dessiné par {$this->dessinateur} ";
        $string .= $this->disponibilite == 1 ? "est disponible" : "n'est plus disponible";

        return $string;
    }
}
