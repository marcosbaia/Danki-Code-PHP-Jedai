<?php
    $meninos = array('chave1'=>'Guilherme','João','Felipe','Mario','Luigi');

    foreach($meninos as $key => $value){
        echo $key;
        echo ' => ';
        echo $value;
        echo '<hr>';
    }
    echo '<br/><hr>';

    $meninas = array('Maria','Rebeca','Laura','Elizabeth','Ana');
    $total = count($meninas);

    for($indice=0; $indice<$total; $indice++){
        echo $indice. ' -> '. $meninas[$indice].'<br/><hr>';
    }

?>