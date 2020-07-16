<?php
    $conteudo = 'Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.';
    
    # A função substr permite o recorte de parte do trecho de uma string. substr($variavel, inicio_da_string, fim_da_string)
    echo substr($conteudo, 0, 271);
    echo '<hr>';

    /***********************************************************************************************************************************/

    $nome = 'Pedro de Alcântara Francisco Antônio João Carlos Xavier de Paula Miguel Rafael Joaquim José Gonzaga Pascoal Cipriano Serafim de Bragança e Bourbon';

    # A função explode separa a string utilizando um delimitador, nesse caso o espaço
    $nomeSeparado = explode(' ', $nome);
    print_r($nomeSeparado); //Imprime apresenrando o indice do array
    
    echo '<br/><br/>';

    # A função implode une as strings utilizando um delimitador, nesse caso o espaço
    $nomeAgrupado = implode(' ', $nomeSeparado);
    echo $nomeAgrupado.'<hr>';
 
    /***********************************************************************************************************************************/
 
    $conteudo = '<h1>Leopoldina </h1> <h2>Carolina </h2><h3>Josefa </h3><h1>de Habsburgo-Lorena</h1>';
    echo $conteudo;

    # A função strip_tags serve para revelar apenas a string retirando todas suas tags de html
    echo strip_tags($conteudo);

    echo '<br/><br/>';

    # A função htmlentities permite revelar o código html da pagina
    echo htmlentities($conteudo).'<hr>';
?>