<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>


</head>


<body>
    <?php
    
        $nome="Hiago";
        $cidade="Cornélio Procópio";
        $numeroCasa=167;
        $numeroChamada=16;

        /*se (isso acontecer ) {
            faça isso
        }
        */

        if ($numeroCasa<$numeroChamada) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        $media=60; 
        $matematica=70;
        $portugues= 80;
        $ciencias=90;
        $fisica=55;
        $quimica=40;
        $redaçao=58;
        $religiosidade=95;
        $biologia=100;
        $leitura=67;
        $teatro=78;

        if ($media<$matematica) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }

        if ($media<$portugues) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }

        if ($media<$ciencias) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }

        if ($media<$fisica) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }

        if ($media<$quimica) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }

        if ($media<$redaçao) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }


        if ($media<$religiosidade) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }


        if ($media<$biologia) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }


        if ($media<$leitura) {
            echo 'Verdadeiro';
        } else {
            echo 'Faloso';
        }


        if ($media<$teatro) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }


        $primeironumero=2;
        $segundonumero=4;
        $soma= $primeironumero+$segundonumero;
        $resultado=$soma*$primeironumero;

            echo $soma;
            echo $resultado

        
    ?>


    <h1> Ficha de cadastro </h1>

    <p> Nome: <?= $nome ?></p>
    <p> Cidade: <?= $cidade?></p>

    
</body>



</html>

<?php
    echo 'Olá, mundo!';
?>