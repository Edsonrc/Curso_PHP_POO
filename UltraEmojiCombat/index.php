<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ultra Emoji Combat</title>
    </head>
    <body>
        <?php
        require_once "Lutador.php";
        require_once "Luta.php";
        
        $l = array();
        $l[0] = new Lutador("Pretty Boy","França",30,1.75,68.9,11,2,1);
        $l[1] = new Lutador("PutScript","Brasil",29,1.68,57.8,14,2,3);
        $l[2] = new Lutador("SnapShadow","EUA",35,1.65,80.9,12,2,1);
        $l[3] = new Lutador("DeadCode","Austrália",28,1.93,81.6,13,0,2);
        $l[4] = new Lutador("UfoCobol","Brasil",37,1.70,119.3,5,4,3);
        $l[5] = new Lutador("NerdArd","EUA",30,1.81,105.7,12,2,4);
        
        $ufc01 = new Luta();
        $ufc01->marcarLuta($l[4], $l[4]);
        $ufc01->lutar();
        
        $l[4]->status();
        $l[5]->status();
                
       
        ?>
    </body>
</html>
