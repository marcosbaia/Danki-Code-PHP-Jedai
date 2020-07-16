<?php
    $meninos = array('João','Bruno','Samuel','Mario','Guilherme','Marcos');

    $meninas[] = 'Gabriele';
    $meninas[] = 'Marcela';
    $meninas[] = 'Helena';
    $meninas[] = 'Flávia';
    $meninas[] = 'Nayara';
    $meninas[] = 'Joana';

    $cidade[0] = 'Jacareacanga';
    $cidade[1] = 'Breves';
    $cidade[2] = 'Oriximiná';
    $cidade[3] = 'Itaituba';
    $cidade[4] = 'Belém';
    $cidade[5] = 'Cametá';

    # array_merge fundi vetores com conteudos diferentes ou não.
    $uniaoArrays = array_merge($meninos, $meninas, $cidade);
    print_r($uniaoArrays);

    echo '<br/><br/><hr/><br/>';

    # array_intersect retornar valores comuns entre variaves
    $estados = array('Pará','São Paulo','Rio de Janeiro','Bahia','Florianopolis','Mato Grosso','Paraiba','Minas Gerais');
    $unidadesFederativas = array('Minas Gerais','Maranhão','Rio de Janeiro','Tocantins','Espirito Santo','Acre','Florianopolis','Pará');
    print_r(array_intersect($estados,$unidadesFederativas));
    
    echo '<br/><br/><hr/>';

    # array_map permite aplicar um função em todos os valores do array
    $conteudo = ['<h1>Leopoldina</h1>','<h2>Carolina</h2>','<h3>Josefa</h3>','<h1>de Habsburgo-Lorena</h1>'];
    print_r(array_map('strip_tags',$conteudo));
?>