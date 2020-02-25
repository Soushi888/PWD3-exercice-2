<?php

namespace PWD3;

class Roman extends Livre
{

    private $genre;

    const THRILLER = 1;
    const POLICIER = 2;
    const AVENTURE = 3;
    const HISTORIQUE = 4;

    public function __construct(string $ecrivain, string $titre, int $annePublication, int $genre)
    {
        parent::__construct($ecrivain, $titre, $annePublication);
        $this->genre = $genre;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function __toString()
    {
        $string = "<p>Le livre {$this->titre}, de genr {$this->genre}, a été écrit par {$this->ecrivain} en l'an {$this->anneePublication} et ";
        $string .= $this->disponibilite = 1 ? "est disponible" : "n'est plus disponible";

        return $string;
    }
}
