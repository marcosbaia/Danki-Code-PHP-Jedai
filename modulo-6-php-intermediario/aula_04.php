<?php
    //Declaração da função
    function mostraNome($nome, $idade){
        echo "<h2>Eu me chamo $nome e tenho $idade anos</h2><hr>";
    }
    
    function calculadora($num1, $num2){
        echo "<h2>A Soma de $num1 + $num2 = ". ($num1 + $num2)."<hr>";
    }

    # A função tambem retorna valores
    function true(){
        return true."<hr>";
    }

    function retornaNome(){
        return 'Henrique <hr>';
    }


    //Chamando a função
    mostraNome('Fabio',38);
    calculadora(7,3);

    # Retornando valores da função
    echo true();
    echo retornaNome();
?>