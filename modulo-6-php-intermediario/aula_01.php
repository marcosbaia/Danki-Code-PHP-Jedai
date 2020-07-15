<?php
    $meninos = array('Pedro','Guilherme','chave'=>'João','Felipe','Mario','Luigi');

    foreach($meninos as $key => $value){
        echo $key . ' => ' . $value . '<hr>';
    }
    echo '<br/><hr>';

    $meninas = array('Maria','Rebeca','Laura','Elizabeth','Ana','Camila');
    $total = count($meninas);

    for($indice=0; $indice<$total; $indice++){
        echo $indice. ' -> '. $meninas[$indice].'<br/><hr>';
    }

?>