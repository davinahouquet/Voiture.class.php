<?php

// Classe et attributs
    class VoitureElec extends Voiture{
        private int $_autonomie;
// Le  mot-clé extends permet à PC d’hériter de la Classe Ordinateur, en d’autres termes,
// PC  est  une  classe  fille  de  Ordinateur  qui  récupère  toutes  ses  méthodes publiques
//  (les  getters  et  setters,  la  méthode  statique  combien(),  etc.)  
//et  devra comporter les mêmes attributs (marque, modèle, etc.)
        // 
        public function __construct(string $data1, string $data2, int $autonomie){
            parent::__construct($data1, $data2);
            $this->_autonomie = $autonomie;
        }
// ::__construct(...) ». Ce code oblige la classe PC à respecter  les  paramètres  du constructeur
//  de sa classe mère, donc à disposer du tableau de données $data.
        public function getAutonomie(): int{
            return $this->_autonomie;
        }
        public function setAutonomie(int $autonomie){
            $this->_autonomie = $_autonomie;
        }

        public function getInfos(){
            return "La voiture est une " . parent::__toString() . " et a une autonomie de " . $this->getAutonomie();
        }

        public function __toString(){
            return parent::__toString() . " " . $this->getAutonomie();
        }
    }
?>