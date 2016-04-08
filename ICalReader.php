<?php

/**
 * Description of ICalReader
 *
 * @author Aurelien Thirion
 */
class ICalReader {
    
    public $modele;
    public $nb_fichier;
    
    
    public function __construct($modele) {
        $this->modele = $modele;
        $this->nb_fichier = 0;
    }
    
    public function readFiles() {
        
        if($dossier = opendir('./ics')){
            
            while( ($fichier = readdir($dossier)) !== FALSE){
                if($fichier != '.' && $fichier != '..'){
                    
                    $this->nb_fichier++;
                    echo $fichier . '  ';
                    
                    //creation des salles avec les infos ici
                    
                }
            }
            
            closedir($dossier);
            
        } else {
            echo 'Erreur lecture du repertoire /ics  ';
        }
        
        echo'fin lecture du repertoire, nombre de fichier = ' . $this->nb_fichier;
    }
    
    
}
