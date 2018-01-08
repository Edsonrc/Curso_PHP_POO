<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança em PHP</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        //p1 = new Pessoa();
        $v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(39);
        $v1->setSexo("M");
        
        print_r($v1);
        
        $a1 = new Aluno();       
        $a1->setNome("Creuza");
        $a1->setIdade(19);
        $a1->setSexo("F");
        $a1->setCurso("Análise de Sistemas");
        $a1->setMatricula(2222);
        $a1->pagarMensalidade();
        
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("Leocádio");
        $b1->getIdade(30);
        $b1->getSexo("M");
        $b1->setCurso("Ciências da Computação");
        $b1->setMatricula(23232);
        $b1->setBolsa(50);
        $b1->renovarBolsa();
        $b1->pagarMensalidade();
        
        print_r($b1);
        
        $pr1 = new Professor();
        $pr1->setNome("Alceu");
        $pr1->setIdade(40);
        $pr1->setSexo("M");
        $pr1->setSalario(2500.00);
        $pr1->receberAumento(500.00);
        
        print_r($pr1);
        
        $t1 = new Tecnico();
        $t1->setNome("Carol");
        $t1->setIdade(26);
        $t1->setMatricula(45456);
        $t1->setRegistroProfissional(909191);
        $t1->setSexo("F");
        $t1->setCurso("Análise de Sistema");
        $t1->praticar();
        
        print_r($t1);
        
        
        
        ?>
        </pre>
    </body>
</html>
