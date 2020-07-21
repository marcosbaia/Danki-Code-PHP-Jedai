
<?php
/* COOKIES
    São pequenos ficheiros de texto que são guardados no computador do cliente, com o objectivo de armazenar pequenas informações. Os cookies são geridos pelos browsers: a maioria oferece ferramentas para ver e editar estes pequenos ficheiros, e permitem definir o ciclo de vida para um cookie.
*/
    session_start();
    setcookie('nome','Guilherme',time()+(60*60*24),'/');

    echo $_COOKIE['nome'];
?>
