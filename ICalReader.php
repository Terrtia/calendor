<?php

/**
 * Description of ICalReader
 *
 * @author Aurelien Thirion
 */
class ICalReader {
    
    public $modele;
    public $nb_fichier;
    public $tableauFichier;
    
    
    public function __construct($modele) {
        $this->modele = $modele;
        $this->nb_fichier = 0;
    }
    
    public function readFiles() {
        
        //Expressions
        $ExpDateDebut = 'DTSTART:(.*)';
        $ExpDateFin = 'DTEND;TZID="Romance Standard Time":(.*)';
        $ExpOrganisateur = 'ORGANIZER;CN=(.*)';
        $ExpLieu = 'LOCALISATION:(.*)';
        $ExpDescription = 'SUMMARY;LANGUAGE=fr:(.*)';
        
        if($dossier = opendir('./ics')){
            
            while( ($fichier = readdir($dossier)) !== FALSE){
                if($fichier != '.' && $fichier != '..'){
                 
                    $this->nb_fichier++;
                    echo $fichier . '  ';
                    
                    //creation des salles avec les infos ici
                    //ouverture du fichier .ics
                    if($fichierIcs = fopen("ics/" . $fichier, "r")){
                        
                        $cal=fread($fichierIcs, filesize("ics/" . $fichier) );
                        
                        $n = preg_match_all($ExpDescription, $cal, $descriptionTab, PREG_PATTERN_ORDER);
                        preg_match_all($ExpDateDebut, $cal, $debutTab, PREG_PATTERN_ORDER);
                        preg_match_all($ExpDateFin, $cal, $finTab, PREG_PATTERN_ORDER);
                        preg_match_all($ExpOrganisateur, $cal, $OrganisateurTab, PREG_PATTERN_ORDER);
                        preg_match_all($ExpLieu, $cal, $LieuTab, PREG_PATTERN_ORDER);
                        
                        //Recuperation des donnees des reunions
                        for($i = 0; $i<$n; $i++){
                            
                        }
                        
                        
                    } else {
                        echo "Erreur lecture fichier ics : " . $fichier ;
                    }
                    
                    //fermeture du fichier .ics
                    fclose($fichierIcs);
                    
                }
            }
            
            closedir($dossier);
            
        } else {
            echo 'Erreur lecture du repertoire /ics  ';
        }
        
        echo'fin lecture du repertoire, nombre de fichier = ' . $this->nb_fichier;
        
        
        
    }
    
    
}
