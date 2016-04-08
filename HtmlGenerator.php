<?php

/**
 * Description of HtmlGenerator
 *
 * @author Aurelien Thirion
 */
class HtmlGenerator {
    
    public $modele;
    public $debutEntete = '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Salle de Réunion</title>';
            
    public $finEntete = "\n    </head>\n";
    public $debutBody = "\n    <body>\n";
    public $finBody = "    </body>\n</html>";
    
    public function __construct($modele) {
        $this->modele = $modele;
    }
    
    public function createHtmlFile() {
        
        $file = "calendrier.html";
        
        //si le fichier existe deja, on le supprime
        if(file_exists($file)){
            //echo 'le fichier existe';
            unlink($file);
        }
        
        //contenu du fichier :
            //entete
        $html = $this->debutEntete . $this->finEntete;
            //body
        $html .= $this->debutBody . $this->finBody; 
        
        
        //creation du fichier
        $myfile = fopen($file, "w") or die("Unable to open/create calendrier.html");
        fwrite($myfile, $html);
        
        //fermeture fichier
        fclose($myfile);
        
    }
    
}
