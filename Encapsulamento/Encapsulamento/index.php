<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento POO</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
        require_once "ControleRemoto.php";
        $c = new ControleRemoto();
        $c->ligar();
        $c->menosVolume();
        $c->abrirMenu();
        
        ?>
        </pre>
    </body>
</html>
