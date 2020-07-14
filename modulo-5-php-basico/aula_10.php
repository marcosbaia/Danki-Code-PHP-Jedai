<?php
    $valor1 = 15;
    $valor2 = '10';

    //Verifica se valores são iguais
    echo 'O valor da variável 1 é: '.$valor1.'<br/>O valor da variável 2 é: '.$valor2.'<br/>';
    if($valor1 == $valor2){
        echo '<br/> Logo as duas variáveis são iguais <br/>';
    }else{
        echo '<br/> Logo as duas varáveis são diferentes <br/>';
    }

    //Verifica se valores são idênticos
    if($valor1 === $valor2){
        echo 'E são Idênticas';
    }else{
        echo 'E NÃO são Idênticas';
    }
?>