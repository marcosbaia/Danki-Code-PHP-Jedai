<?php
    $valor1 = 1;
    $valor2 = 1;
    $valor3 = 3;

    echo 'O valor da variável 1 é: '.$valor1.'<br/>';
    echo 'O valor da variável 2 é: '.$valor2.'<br/>';
    echo 'O valor da variável 3 é: '.$valor3.'<br/>';

    echo '<br/>Operador lógico " E " <br/>';
    if(($valor1 == $valor2) && ($valor2 ==$valor3)){
        echo 'Verdade';
    }else{
        echo 'Falsidade';
    }
    echo '<br/>';

    echo '<br/>Operador lógico " OU " <br/>';
    if(($valor1 == $valor2) || ($valor2 ==$valor3)){
        echo 'Verdade';
    }else{
        echo 'Falsidade';
    }
?>