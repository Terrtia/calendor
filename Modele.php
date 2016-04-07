<?php

/**
 * Description of Modele
 *
 * @author Aurelien Thirion
 */
class Modele {
    
    private $salles;
    
    public function __construct() {
        
    }
    
    /*  Get Function    */
    
    /**
     * retourne un tableau de [Salle]
     * @return type Salle array
     */
    public function getSalles() {
        return $this->salles;
    }
    
    /*  Set Function    */
    
    /**
     * affectation d'un tableau de [Salle] a l'attribut $salles
     * @param type $array (Salle Array)
     */
    public function setSalles($array) {
        $this->salles = $array;
    }
    
    public function test() {
        echo "modele\n";
    }
}
