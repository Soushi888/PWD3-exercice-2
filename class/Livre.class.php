<?php

namespace PWD3;

use Exception;

/**
 * Class Livre
 */
class Livre
{
    protected $ecrivain = "";
    protected $titre = "";
    protected $anneePublication = 0;
    protected $disponibilite = true;

    /**
     * @param string $ecrivain
     * @param string $titre
     * @param integer $anneePublication
     * 
     * @return void
     */
    public function __construct(string $ecrivain = "", string $titre = "", int $anneePublication = 0)
    {
        $this->ecrivain = $ecrivain;
        $this->titre = $titre;
        $this->anneePublication = $anneePublication;
    }

    /**
     * Accesseur magique d'une propriété de l'objet
     *
     * @return <type de la propriété>
     */
    public function __get($prop)
    {
        return $this->$prop;
    }

    /**
     * @return this Ecrivain
     */
    public function getEcrivain()
    {
        return $this->ecrivain;
    }

    /**
     * @return this titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return this annePublication
     */
    public function getAnneePublication()
    {
        return $this->anneePublication;
    }

    /**
     * @return this disponibilité
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }


    public function __set($prop, $val)
    {
        $setProperty = 'set' . ucfirst($prop);
        $this->$setProperty($val);
    }

    /**
     * @param string $ecrivain
     * 
     * @return this
     */
    public function setEcrivain(string $ecrivain = "")
    {
        $this->ecrivain = $ecrivain;
    }

    /**
     * @param string $titre
     * 
     * @return this
     */
    public function setTitre(string $titre = "")
    {
        $this->titre = $titre;
    }

    /**
     * @param int $anneePublication
     * 
     * @return this
     */
    public function setAnneePublication($anneePublication = 0)
    {

        $this->anneePublication = $anneePublication;

        try {
            if (is_int($anneePublication)) {
                $this->anneePublication = $anneePublication;
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            echo "<br>" . __METHOD__ . " -> erreur : " . $e->getMessage() . "<br>";
            return false;
        }
    }

    /**
     * @param bool $disponibilite
     * 
     * @return this
     */
    public function setDisponibilite(bool $disponibilite = true)
    {
        try {
            $this->disponibilite = $disponibilite;

            return true;
        } catch (Exception $e) {
            echo "<br>" . __METHOD__ . " -> erreur : " . $e->getMessage() . "<br>";
            return false;
        }
    }

    /**
     * @return string Texte indiquant l'état d'un objet
     */
    public function __toString()
    {
        try {
            $string = "<p>Le livre {$this->titre} qui a été écrit par {$this->ecrivain} en l'an {$this->anneePublication} ";
            $string .= $this->disponibilite == 1 ? "est disponible" : "n'est plus disponible";

            return $string;
        } catch (\Exception $e) {
            echo "<br>" . __METHOD__ . " -> erreur : " . $e->getMessage() . "<br>";
            exit;
        }
    }
}
