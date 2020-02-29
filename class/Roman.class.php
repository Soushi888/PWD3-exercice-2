<?php

namespace PWD3;

class Roman extends Livre
{

    /**
     * @var int Id du genre d'un Roman
     */
    private $genre;

    // Genres
    const THRILLER = 1;
    const POLICIER = 2;
    const AVENTURE = 3;
    const HISTORIQUE = 4;
    const PHILOSOPHIQUE = 5;
    const ROMANTIQUE = 6;
    const SCIENTIFIQUE = 7;

    /**
     * Constructeur de Roman
     * @param string $ecrivain
     * @param string $titre
     * @param integer $annePublication
     * @param integer $genre
     * 
     * @return void
     */
    public function __construct(string $ecrivain, string $titre, int $annePublication, int $genre)
    {
        parent::__construct($ecrivain, $titre, $annePublication);
        $this->genre = $genre;
    }

    /**
     * Getter Magique
     * @param mixed $prop
     * 
     * @return void
     */
    public function __get($prop)
    {
        return $this->$prop;
    }

    /**
     * Getter Genre
     * @return string Genre du Roman
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Setter Genre
     * @param string $genre
     * 
     * @return void
     */
    public function setGenre($genre = "")
    {
        $this->genre = $genre;
    }

    /**
     * @return string Texte décrivant l'état d'un Roman
     */
    public function __toString()
    {
        switch ($this->genre) {
            case 1:
                $genre = "THRILLER";
                break;
            case 2:
                $genre = "POLICIER";
                break;
            case 3:
                $genre = "AVENTURE";
                break;
            case 4:
                $genre = "HISTORIQUE";
                break;
            case 5:
                $genre = "PHILOSOPHIQUE";
                break;
            case 6:
                $genre = "ROMANTIQUE";
                break;
            case 7:
                $genre = "SCIENTIFIQUE";
                break;
        }

        $string = "<p>Le roman {$this->titre}, du genre {$genre}, qui a été écrit par {$this->ecrivain} en l'an {$this->anneePublication} ";
        $string .= $this->disponibilite == 1 ? "est disponible" : "n'est plus disponible";

        return $string;
    }
}
