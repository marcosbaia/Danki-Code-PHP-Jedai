<?php
    /*  .:: Array Unidimensional - Declaração

        1° Maneira
            $vetorNome = ['Guilherme','Mauricio','Bruno','Baltazar'];

        2° Maneira
            $vetorNome = array('Guilherme','Mauricio','Bruno','Baltazar');
        
        3° Maneira
            $vetorNome[0] = 'Guilherme';
            $vetorNome[1] = 'Mauricio';
            $vetorNome[2] = 'Bruno';
            $vetorNome[3] = 'Baltazar';

        4° Maneira (o vetor fica responsável do colocar o índice)
            $vetorNome[ ] = 'Guilherme';
            $vetorNome[ ] = 'Mauricio';
            $vetorNome[ ] = 'Bruno';
            $vetorNome[ ] = 'Baltazar';
    */
    
    #   .:: Array Unidimensional - Declaração
    
    $vetorNomeIdade = array(array('Guilherme','Mauricio','Bruno','Baltazar'), array(45, 36, 24, 75));
 
    echo $vetorNomeIdade[0][0].' tem '.$vetorNomeIdade[1][0].' anos <br/>';
    echo $vetorNomeIdade[0][1].' tem '.$vetorNomeIdade[1][1].' anos <br/>';
    echo $vetorNomeIdade[0][2].' tem '.$vetorNomeIdade[1][2].' anos <br/>';
    echo $vetorNomeIdade[0][3].' tem '.$vetorNomeIdade[1][3].' anos <br/>';
?>