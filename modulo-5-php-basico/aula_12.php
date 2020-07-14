<?php
    echo '.:: Laços de Repetição ::.<br/>';
    echo '<br/>';
    echo 'FOR - Incrementando <br/>';
    echo '<br/>';
    for($contForIncrement=0; $contForIncrement<=5; $contForIncrement++){
        echo'Incrementando: '.$contForIncrement.'<br/>';
    }
    
    echo '<br/>';
    echo 'FOR - Decrementando <br/>';
    echo '<br/>';
    for($contForDecrement=5; $contForDecrement>=0; $contForDecrement--){
        echo'Decrementando: '.$contForDecrement.'<br/>';
    }

echo '<br/>';
echo'********************';
echo '<br/>';

    echo '<br/>';
    echo 'WHILE - Incrementando <br/>';
    echo '<br/>';
    $contWhileIncrement = 0;
    while($contWhileIncrement <= 5){
        echo"Incrementando: $contWhileIncrement <br/>";
        $contWhileIncrement+=1;
    }

    echo '<br/>';
    echo 'WHILE - Decrementando <br/>';
    echo '<br/>';
    $contWhileDecrement = 5;
    while($contWhileDecrement >= 0){
        echo"Decrementando: $contWhileDecrement <br/>";
        $contWhileDecrement-=1;
    }

echo '<br/>';
echo'********************';
echo '<br/>';
    
    echo '<br/>';
    echo 'DO WHILE - Incrementando <br/>';
    echo '<br/>';
    $contDoWhileIncrement = 0;
    do{
        echo"Incrementando: $contDoWhileIncrement <br/>";
        $contDoWhileIncrement++;
    }while($contDoWhileIncrement <= 5);

    echo '<br/>';
    echo 'DO WHILE - Decrementando <br/>';
    echo '<br/>';
    $contDoWhileDecrement = 5;
    do{
        echo"Decrementando: $contDoWhileDecrement <br/>";
        $contDoWhileDecrement--;
    }while($contDoWhileDecrement >= 0);
?>