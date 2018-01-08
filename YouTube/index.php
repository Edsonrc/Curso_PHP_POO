<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício Final - </title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
      
        $v[0] = new Video('Aula Prática de PHP');
        $v[1] = new Video('Aula de Angular JS');
        $v[2] = new Video('Aula de Java');
         
        $g[0] = new Gafanhoto("Jubileu",22,"M","jujuba");
        $g[1] = new Gafanhoto("Creuza",19, "F","creuzita");
        
        $o1[0] = new Visualizacao($g[0], $v[1]);
        $o2[1] = new Visualizacao($g[1], $v[1]);
        print_r($o1);
       
       
        ?>
        </pre>
    </body>
</html>
