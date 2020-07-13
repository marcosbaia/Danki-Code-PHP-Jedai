<?php
    //Declaração de Array - maneira 01
        $nome = array('João','Bruna','Samuel','Maria','Guilherme','Marcos');

    //Declaração de Array - maneira 02
        $idade[] = '23';
        $idade[] = '16';
        $idade[] = '28';
        $idade[] = '7';
        $idade[] = '50';
        $idade[] = '35';

    //Declaração de Array - maneira 03
        $cidade[0] = 'Jacareacanga';
        $cidade[1] = 'Breves';
        $cidade[2] = 'Oriximiná';
        $cidade[3] = 'Itaituba';
        $cidade[4] = 'Belém';
        $cidade[5] = 'Cametá';

    echo $nome[5]." tem ".$idade[5]." anos de idade e é natural de ".$cidade[5].'<br/>';
    
    //Declaração de Array no PHP7
        $formacao = ['Analfabeto','Ensino Médio','graduação','Ensino Fundamental','Doutorado','Mestrado'];

    echo $nome[3]." tem ".$idade[3]." anos de idade e é natural de ".$cidade[3]." e está no(a) ".$formacao[3].'<br/>';

    //Arrays com dados variados. Ex: String, inteiro, etc...
    $contato['nome'] = 'Juliana';
    $contato['telefone'] = '(91) 9 9378-6539';
    $contato['cidade'] = 'Belém';

    $contato['nome'] = 'Paulo';
    $contato['telefone'] = '(62) 9 97458-3515';
    $contato['cidade'] = 'Goias';

    $contato['nome'] = 'Marcos';
    $contato['telefone'] = '(93) 9 9165-9518';
    $contato['cidade'] = 'Florianópolis';

    $contato['nome'] = 'Rebeca';
    $contato['telefone'] = '(61) 9 94281-3309';
    $contato['cidade'] = 'Distrito Federal';

    $contato['nome'] = 'José';
    $contato['telefone'] = '(41) 9 8165-0732';
    $contato['cidade'] = 'Curitiba';

    $contato['nome'] = 'Ana';
    $contato['telefone'] = '(96) 9 3853-9438';
    $contato['cidade'] = 'Macapá';

    echo $contato['nome'].$contato['telefone'].$contato['cidade'];
?>