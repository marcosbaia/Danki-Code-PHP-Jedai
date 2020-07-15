<?php
    sleep(3);
    echo '<br/>A função Sleep retarda a execução do código conforme o tempo de espera. <br/>';
    echo '<br/>Aqui levou 3 segundos para o código ser executado e a mensagem aparecer. <br/>';
  
    $nome = 'marcos';

    if($nome == 'joao'){
        echo '<br/> tudo certo <br/>';
    }else{
        die('<br/> Script finalizado!!!');
    }

?>