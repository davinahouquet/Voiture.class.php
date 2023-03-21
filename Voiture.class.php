<?php

// Classe et attributs//
class Voiture
{
    private string $_marque;
    private string $_modele;

    // Construct//
    public function __construct(string $marque = "", string $modele = "")
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    // Getter et setters//
    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque(string $marque)
    {
        $this->_marque = $marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function setModele(string $modele)
    {
        $this->_modele = $modele;
    }

    public function getInfos(){
        return "La voiture est une " . $this->__toString();
    }
    public function __toString(){
        return $this->getMarque() . " " . $this->getModele();
    }
}
