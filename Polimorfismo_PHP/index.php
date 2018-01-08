<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo em PHP</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Ave.php';
            require_once 'Reptil.php';
            require_once 'Cachorro.php';
            require_once 'Canguru.php';
            require_once 'Tartaruga.php';
            
            $m1 = new Mamifero();
            $a1 = new Ave();
            $r1 = new Reptil();            
            $c1 = new Cachorro();
            $k1 = new Canguru();
            $t1 = new Tartaruga();
            
            $m1->locomover();
            $c1->locomover();
            $k1->locomover();
            $t1->locomover();
            
            $m1->emitirSom();
            $c1->emitirSom();
           
            
            
           
        ?>
        </pre>
    </body>
</html>
