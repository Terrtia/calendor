<!DOCTYPE html>
<!--
Main class (test version)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once('Modele.php');
        require_once('ICalReader.php');
        require_once('HtmlGenerator.php');
        
        $modele = new Modele();
        
        $reader = new ICalReader($modele);
        $reader->readFiles();
        
        $generator = new HtmlGenerator($modele);
        $generator->createHtmlFile();
        ?>
    </body>
</html>
