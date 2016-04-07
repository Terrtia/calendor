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
        echo "index\n";
        
        require_once('Modele.php');
        require_once('HtmlGenerator.php');
        
        $modele = new Modele();
        $modele->test();
        
        $generator = new HtmlGenerator();
        $generator->createHtmlFile();
        ?>
    </body>
</html>
