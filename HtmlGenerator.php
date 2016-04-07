<?php

/**
 * Description of HtmlGenerator
 *
 * @author Aurelien Thirion
 */
class HtmlGenerator {
    
    public function __construct() {
        
    }
    
    public function createHtmlFile() {
        
        $file = "calendrier.html";
        
        //si le fichier existe deja, on le supprime
        if(file_exists($file)){
            echo 'le fichier existe';
            unlink($file);
        }
        
        //creation du fichier
        $myfile = fopen($file, "w") or die("Unable to open/create calendrier.html");
        
        
        //fermeture fichier
        fclose($myfile);
        
    }
    
}
