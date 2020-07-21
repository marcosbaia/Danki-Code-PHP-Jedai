<?php
    /* SESSÕES
        Semelhante aos cookies, as sessões são, por predefinição, pequenos ficheiros de texto guardados numa pasta específica no servidor. Estes não podem ser requisitados pelo browser de forma direta, tendo de ser lidos com PHP. Com sessões, é possível guardar não só dados de tipos básicos, como strings e inteiros, mas também objectos de PHP, como classes, etc.
    */
    session_start(); //startou a sessão
    $_SESSION['nome'] = 'Guilherme'; //declarou a sessão   
?>
