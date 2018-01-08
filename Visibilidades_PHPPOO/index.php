<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8"/>
    <title>Visibilidade em PHP/POO</title>
    </head>
    
    <body>
        <pre>
        <?php
            require_once "Caneta.php";
            $c1 = new Caneta;            
            $c1->modelo = "Bic Cristal";
            $c1->cor    = "Azul";
            //$c1->ponta  = 0.7;
            //$c1->carga = 80;
            $c1->rabiscar();
        
            print_r($c1);
    
        ?>
        </pre>
        
    </body>
</html>

